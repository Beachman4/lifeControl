<?php
namespace App\Facade;

use App\User;
use Session;

class UserClass
{
    public static $session_identifier = 'id';

    public static function signUserIn($user_id)
    {
        Session::put(self::$session_identifier, $user_id);
    }

    public static function Get()
    {
        if ($user = User::find(Session::get(self::$session_identifier))) {
            return $user;
        }
    }

    public static function isSignedIn()
    {
        $user_id = Session::get(self::$session_identifier);
        if (User::find($user_id)) {
            return true;
        }
        return false;
    }
}
