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
        // day
        $data['currentDate'] = date('Y-m-d');
        $data['date'] = $data['currentDate'];
        if (request()->date && !empty(request()->date)) {
            $data['date'] = request()->date;
        }
        $data['prevDate'] = date('Y-m-d', strtotime('-1 day', strtotime($data['date'])));
        $data['nextDate'] = date('Y-m-d', strtotime('+1 day', strtotime($data['date'])));
        
        // month
        $data['currentDateMonth'] = date('Y-m');
        $data['dateMonth'] = $data['currentDateMonth'];
        if (request()->dateMonth && !empty(request()->dateMonth)) {
            $data['dateMonth'] = request()->dateMonth;
        }
        $data['prevDateMonth'] = date('Y-m', strtotime('-1 month', strtotime($data['dateMonth'])));
        $data['nextDateMonth'] = date('Y-m', strtotime('+1 month', strtotime($data['dateMonth'])));

    	$data['statisticalToday'] = Spend::select(DB::raw('SUM(price) as sum_price'), DB::raw('COUNT(*) as count'), 'title')
    						->join('category_spends', 'spends.category_id', '=', 'category_spends.id')
                            ->where('spends.user_id', Auth::user()->id)
    						->whereDate('spends.date', $data['date'])
    						->groupBy('category_id')
    						->orderBy('category_id', 'ASC')
    						->get();
    	$data['statisticalThisMonth'] = Spend::select(DB::raw('SUM(price) as sum_price'), DB::raw('COUNT(*) as count'), 'title')
    						->join('category_spends', 'spends.category_id', '=', 'category_spends.id')
                            ->where('spends.user_id', Auth::user()->id)
    						->whereMonth('spends.date', date('m', strtotime($data['dateMonth'])))
    						->whereYear('spends.date', date('Y', strtotime($data['dateMonth'])))
    						->groupBy('category_id')
    						->orderBy('category_id', 'ASC')
    						->get();
    	return view('frontends.statistical.index', $data);
    }
}
