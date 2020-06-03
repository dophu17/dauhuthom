<?php

namespace App\Http\Controllers\Frontends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Models\Author;
use App\Http\Models\Book;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index() {
    	$data['list'] = Book::with(['author'])
                            ->where('user_id', Auth::user()->id)
                            ->get();
    	return view('frontends.books.index', $data);
    }

    public function getAdd() {
    	return view('frontends.books.add');
    }

    public function postAdd() {
    	$item = new Book;
    	$item->name = request()->name;
    	$item->price = request()->price;
    	$item->status = request()->status ? 1 : 0;
    	$item->read_start_date = request()->read_start_date;
    	$item->read_end_date = request()->read_end_date;
        $item->user_id = Auth::user()->id;
        if (request()->author_id && request()->author_id > 0 && !empty(request()->author_id)) {
        	$item->author_id = request()->author_id;
        } else {
        	$author = Author::where('user_id', Auth::user()->id)
        				->whereRaw('LOWER(`name`) = ?', [Str::lower(request()->author_name)])
        				->first();
        	if (empty($author)) {
	        	$author = new Author;
	        	$author->name = request()->author_name;
	        	$author->user_id = Auth::user()->id;
	        	$author->save();
        	}
        	
        	$item->author_id = $author->id;
        }
    	$item->save();
    	return redirect()->route('frontend.book.index');
    }

    public function getEdit($id) {
    	$data['item'] = Book::find($id);
    	return view('frontends.bookds.edit', $data);
    }

    public function postEdit($id) {
    	$item = Book::find($id);
    	$item->name = request()->name;
    	$item->price = request()->price;
    	$item->status = request()->status ? 1 : 0;
    	$item->read_start_date = request()->read_start_date;
    	$item->read_end_date = request()->read_end_date;
        $item->user_id = Auth::user()->id;
        if (request()->author_id && request()->author_id > 0 && !empty(request()->author_id)) {
        	$item->author_id = request()->author_id;
        } else {
        	$author = Author::where('user_id', Auth::user()->id)
        				->whereRaw('LOWER(`name`) = ?', [Str::lower(request()->author_name)])
        				->first();
        	if (empty($author)) {
	        	$author = new Author;
	        	$author->name = request()->author_name;
	        	$author->user_id = Auth::user()->id;
	        	$author->save();
        	}
        	$item->author_id = $author->id;
        }
    	$item->save();
    	return redirect()->route('frontend.book.index');
    }

    public function getDelete($id) {
    	$item = Book::find($id);
    	$item->delete();
    	return redirect()->route('frontend.book.index');
    }
}
