<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home() {
        // return view('frontends.homes.home');
        return view('frontends.layouts.layout');
    }
}
