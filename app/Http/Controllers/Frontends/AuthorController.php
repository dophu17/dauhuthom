<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Author;
use Auth;

class AuthorController extends Controller
{
    public function index() {
    	$data['list'] = Author::where(function($query) {
                                $query->where('user_id', Auth::user()->id);
                                $query->orWhereNull('user_id');
                            })->get();
        
    	return view('frontends.authors.index', $data);
    }

    public function getAdd() {
    	return view('frontends.authors.add');
    }

    public function postAdd() {
    	$item = new Author;
    	$item->name = request()->name;
        $item->user_id = Auth::user()->id;
    	$item->save();
    	return redirect()->route('frontend.author.index');
    }

    public function getEdit($id) {
    	$data['item'] = Author::find($id);
    	return view('frontends.authors.edit', $data);
    }

    public function postEdit($id) {
    	$item = Author::find($id);
    	$item->name = request()->name;
    	$item->save();
    	return redirect()->route('frontend.author.index');
    }

    public function getDelete($id) {
    	$item = Author::find($id);
    	$item->delete();
    	return redirect()->route('frontend.author.index');
    }

    public function searchByKeyAjax() {
        $key = request()->key;
        $item = Author::where(function($query) {
                        $query->where('user_id', Auth::user()->id);
                        $query->orWhereNull('user_id');
                    })
        			->where('name', 'LIKE', '%' . $key . '%')
        			->get();
        return [
            'status' => 1,
            'data' => $item
        ];
    }
}
