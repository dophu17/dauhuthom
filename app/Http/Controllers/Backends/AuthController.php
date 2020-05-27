<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function getLogin() {
        return view('backends.auths.login');
    }

    function postLogin() {
        $credentials = request()->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.home');
        }
        return redirect()->route('admin.login');
    }

    function getLogout() {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('admin.login');
    }
}
