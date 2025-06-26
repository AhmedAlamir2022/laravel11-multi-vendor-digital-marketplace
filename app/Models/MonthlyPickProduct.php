<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonthlyPickProduct extends Model
{
    protected $guarded = [];

    protected $casts = ['item_ids' => 'array'];
}
