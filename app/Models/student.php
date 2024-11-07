<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class student extends Model
{

    use HasFactory;

    protected $with = ['grade'];

    public function grade(): BelongsTo  {
        return $this->belongsTo(grade::class);
    }
}
