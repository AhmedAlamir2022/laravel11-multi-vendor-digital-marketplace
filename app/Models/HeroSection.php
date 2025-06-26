<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $guarded = [];

    protected $casts = [
        'featured_items_one' => 'array',
        'featured_items_two' => 'array',
    ];
}
