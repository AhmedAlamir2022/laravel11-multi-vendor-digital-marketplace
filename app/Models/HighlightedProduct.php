<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HighlightedProduct extends Model
{
    protected $guarded = [];
    protected $casts = [ 'item_ids' => 'array'];
}
