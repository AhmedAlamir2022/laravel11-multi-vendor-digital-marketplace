<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategory extends Model
{
    protected $guarded = [];

    function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
