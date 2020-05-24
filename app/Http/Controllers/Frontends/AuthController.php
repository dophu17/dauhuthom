<?php

namespace App\Http\Controllers\Frontends;

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
            return redirect()->route('frontend.home');
        }
        return [
            'status' => 0,
            'msg' => 'Login fail!',
            'data' => []
        ];
    }

    function getLogout() {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect()->route('frontend.home');
    }
}
