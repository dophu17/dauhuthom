<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Models\CategorySpend;
use App\Http\Models\Spend;

class StatisticalController extends Controller
{
    public function index() {
    	$data = [
    		'today' => [
	    		'totalPriceByCats' => [],
	    		'categories' => []
    		],
    		'thismonth' => [
    			'totalPriceByCats' => [],
	    		'categories' => []
    		]
    	];
    	$totalPriceByCats = Spend::select(DB::raw('SUM(price) as sum_price'), 'title')
    						->join('category_spends', 'spends.category_id', '=', 'category_spends.id')
    						->whereDate('spends.created_at', date('Y-m-d'))
    						->groupBy('category_id')
    						->orderBy('category_id', 'ASC')
    						->get();
		if (!empty($totalPriceByCats)) {
			foreach ($totalPriceByCats as $k => $v) {
				$data['today']['totalPriceByCats'][] = $v->sum_price;
				$data['today']['categories'][] = $v->title;
			}
		}
    	return view('frontends.statistical.index', $data);
    }
}
