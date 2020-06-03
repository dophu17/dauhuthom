<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Book;

class Author extends Model
{
    protected $table = 'authors';

    public function books() {
        return $this->hasMany(Book::class);
    }
}
