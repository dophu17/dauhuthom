<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\CategorySpend;
use App\Http\Models\Spend;
use Auth;

class StatisticalController extends Controller
{
    public function index() {
    	$data['statisticalToday'] = Spend::select(DB::raw('SUM(price) as sum_price'), DB::raw('COUNT(*) as count'), 'title')
    						->join('category_spends', 'spends.category_id', '=', 'category_spends.id')
                            ->where('spends.user_id', Auth::user()->id)
    						->whereDate('spends.date', date('Y-m-d'))
    						->groupBy('category_id')
    						->orderBy('category_id', 'ASC')
    						->get();
    	$data['statisticalThisMonth'] = Spend::select(DB::raw('SUM(price) as sum_price'), DB::raw('COUNT(*) as count'), 'title')
    						->join('category_spends', 'spends.category_id', '=', 'category_spends.id')
                            ->where('spends.user_id', Auth::user()->id)
    						->whereMonth('spends.date', date('m'))
    						->whereYear('spends.date', date('Y'))
    						->groupBy('category_id')
    						->orderBy('category_id', 'ASC')
    						->get();
    	return view('frontends.statistical.index', $data);
    }
}
