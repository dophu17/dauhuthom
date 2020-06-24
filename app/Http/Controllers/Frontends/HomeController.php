<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Models\Campaign;

class HomeController extends Controller
{
    function home() {
    	$data['campaign1'] = Campaign::orderBy('created_at', 'DESC')->get();
    	// dd($data);
        return view('frontends.homes.home', $data);
    }
}
