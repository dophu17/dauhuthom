<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\CategorySpend;

class Spend extends Model
{
    protected $table = 'spends';

    public function category() {
        return $this->belongsTo(CategorySpend::class, 'category_id');
    }
}
