<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function main(Request $request)
    {
        Session::put('username',$request->user);
        Session::put('usernameDB','admin');
        if (Session::get('username') == Session::get('usernameDB')) {
            return view('profile');
        }else{
            return Redirect::route('profile.index');
        }
    }

    public function destroy()
    {
        Session::flush();
        return Redirect::route('profile.main');
    }
}
