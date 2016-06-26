<?php
namespace App\Facade;

use App\Users;
use Session;

class User
{
    public static $session_identifier = 'user_id';

    public static function signIn($user_id)
    {
        request()->session()->put(self::$session_identifier, $user_id);
        return true;
    }
    public static function Get()
    {
        if (session()->has(self::$session_identifier)) {
            if ($user = Users::find(session()->get(self::$session_identifier))) {
                return $user;
            }
            return false;
        }
        return false;
    }

    public static function signOut()
    {
        Session::forget(self::$session_identifier);
    }
}