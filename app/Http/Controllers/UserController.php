<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Users;
use User;


class UserController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'  =>  'required',
            'password'  =>  'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')->withErrors($validator)->withInput();
        }

        if (Users::loginUser($request)) {
            return redirect()->route('index');
        }

        Session::flash('notification', 'Login Failed.  Incorrect Username/Password.');
        return redirect()->back();
    }

    public function logOut()
    {
        User::signOut();
        return redirect()->route('login');
    }
}
