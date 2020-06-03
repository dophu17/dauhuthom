<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Author;

class Book extends Model
{
    protected $table = 'books';

    public function author() {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
