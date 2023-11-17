<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $user = new User();
        $user->id = 1;
        $user->email = 'johndoasdase@example.com';
        $user->password = 'password';
        Auth::setUser($user);
        if (Auth::check()) {
            dd("usuario autenticado");
        } else {
            dd("usuario NO autenticado");
        }
    }
}
