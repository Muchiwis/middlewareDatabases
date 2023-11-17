<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        $user = new User();
        $user->id = 1;
        $user->name = "jhord";
        Auth::setUser($user);
    }
    public function home(){
        echo "BIENVENIDO AL HOME XD";
    }
    public function destroySession()
    {
        Auth::logout();
    }
}
