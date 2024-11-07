<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class grade extends Model
{
    use HasFactory;

    // protected $with = ['students'];

    public function students(): hasMany  {
        return $this->hasMany(student::class);
    }
}
