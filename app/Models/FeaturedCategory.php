<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedCategory extends Model
{
    protected $guarded = [];

    protected $casts = ['category_ids' => 'array'];
}
