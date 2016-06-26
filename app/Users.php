<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use User;
use Hash;

class Users extends Model
{
    protected $table = 'users';

    public static function loginUser(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = self::where('username', $username)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                User::signIn($user->id);
                return true;
            }
            return false;
        }
        return false;
    }
}
