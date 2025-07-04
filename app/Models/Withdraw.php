<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Withdraw extends Model
{
    protected $guarded = [];
    function author() : BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
