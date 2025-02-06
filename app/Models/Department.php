<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Department extends Model
{
    protected $fillable = ['name', 'description'];

    use HasFactory;
    public function students(): HasMany
    {
        return $this->hasMany(student::class);
    }

    public function grade(): HasMany
    {
        return $this->belongsTo(grade::class);
    }
}
