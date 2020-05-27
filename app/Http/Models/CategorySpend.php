<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Spend;

class CategorySpend extends Model
{
    protected $table = 'category_spends';

    public function spends() {
        return $this->hasMany(Spend::class);
    }
}
