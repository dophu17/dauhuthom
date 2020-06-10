<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Author;
use Auth;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index() {
    	$data['list'] = Author::where(function($query) {
                                $query->where('user_id', Auth::user()->id);
                                $query->orWhereNull('user_id');
                            })->paginate(5);
        
    	return view('frontends.authors.index', $data);
    }

    public function getAdd() {
    	return view('frontends.authors.add');
    }

    public function postAdd() {
        $validator = Validator::make(request()->all(), [
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('frontend.author.add')
                        ->withErrors($validator)
                        ->withInput();
        }
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
        $validator = Validator::make(request()->all(), [
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->route('frontend.author.edit', ['id' => $id])
                        ->withErrors($validator)
                        ->withInput();
        }
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
        $item = [];
        if (!empty($key)) {
            $item = Author::where(function($query) {
                            $query->where('user_id', Auth::user()->id);
                            $query->orWhereNull('user_id');
                        })
                        ->where('name', 'LIKE', '%' . $key . '%')
                        ->get()->toArray();
        }
        return [
            'status' => 1,
            'msg' => '',
            'data' => $item
        ];
    }
}
