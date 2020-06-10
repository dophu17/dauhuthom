<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\CategorySpend;
use Auth;
use Illuminate\Support\Facades\Validator;

class CategorySpendController extends Controller
{
    public function index() {
    	$data['list'] = CategorySpend::where(function($query) {
                                $query->where('user_id', Auth::user()->id);
                            })->get();
        
    	return view('frontends.category-spends.index', $data);
    }

    public function getAdd() {
    	return view('frontends.category-spends.add');
    }

    public function postAdd() {
        $validator = Validator::make(request()->all(), [
            'title' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('frontend.category.spend.add')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$item = new CategorySpend;
    	$item->title = request()->title;
    	$item->price_default = request()->price_default;
        $item->user_id = Auth::user()->id;
    	$item->save();
    	return redirect()->route('frontend.category.spend.index');
    }

    public function getEdit($id) {
    	$data['item'] = CategorySpend::find($id);
    	return view('frontends.category-spends.edit', $data);
    }

    public function postEdit($id) {
        $validator = Validator::make(request()->all(), [
            'title' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('frontend.category.spend.edit', ['id' => $id])
                        ->withErrors($validator)
                        ->withInput();
        }

    	$item = CategorySpend::find($id);
    	$item->title = request()->title;
    	$item->price_default = request()->price_default;
    	$item->save();
    	return redirect()->route('frontend.category.spend.index');
    }

    public function getDelete($id) {
    	$item = CategorySpend::find($id);
    	$item->delete();
    	return redirect()->route('frontend.category.spend.index');
    }

    public function getByIdAjax() {
        $id = request()->id;
        $item = CategorySpend::find($id);
        return [
            'status' => 1,
            'data' => $item
        ];
    }
}
