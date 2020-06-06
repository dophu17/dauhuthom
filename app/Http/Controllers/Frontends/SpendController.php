<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\CategorySpend;
use App\Http\Models\Spend;
use Auth;

class SpendController extends Controller
{
    public function index() {
    	$data['currentDate'] = date('Y-m-d');
    	$data['date'] = $data['currentDate'];
    	if (request()->date && !empty(request()->date)) {
    		$data['date'] = request()->date;
    	}
    	$data['prevDate'] = date('Y-m-d', strtotime('-1 day', strtotime($data['date'])));
    	$data['nextDate'] = date('Y-m-d', strtotime('+1 day', strtotime($data['date'])));
    	$data['list'] = Spend::with(['category'])
                            ->where('user_id', Auth::user()->id)
                            ->whereDate('date', $data['date'])
                            ->get();
    	return view('frontends.spends.index', $data);
    }

    public function getAdd() {
    	$data['categories'] = CategorySpend::where(function($query) {
                                    $query->where('user_id', Auth::user()->id);
                                    $query->orWhereNull('user_id');
                                })->get();
    	$data['date'] = date('Y-m-d');
    	if (request()->date && !empty(request()->date)) {
    		$data['date'] = request()->date;
    	}
    	return view('frontends.spends.add', $data);
    }

    public function postAdd() {
    	$item = new Spend;
    	$item->category_id = request()->category_id;
    	$item->price = request()->price;
    	$item->description = request()->description;
    	$item->date = request()->date;
        $item->user_id = Auth::user()->id;
    	$item->save();
    	return redirect()->route('frontend.spend.index', ['date' => $item->date]);
    }

    public function getEdit($id) {
    	$data['item'] = Spend::find($id);
    	$data['categories'] = CategorySpend::where(function($query) {
                                    $query->where('user_id', Auth::user()->id);
                                    $query->orWhereNull('user_id');
                                })->get();
    	return view('frontends.spends.edit', $data);
    }

    public function postEdit($id) {
    	$item = Spend::find($id);
    	$item->category_id = request()->category_id;
    	$item->price = request()->price;
    	$item->description = request()->description;
    	$item->save();
    	return redirect()->route('frontend.spend.index', ['date' => $item->date]);
    }

    public function getDelete($id) {
    	$item = Spend::find($id);
    	$item->delete();
    	return redirect()->route('frontend.spend.index');
    }
}
