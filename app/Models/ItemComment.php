<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemComment extends Model
{
    protected $guarded = [];

    function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
