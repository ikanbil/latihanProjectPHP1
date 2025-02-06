<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class student extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'grade_id',"department_id", 'email', 'telepon', 'alamat'];

    protected $with = ['grade'];
    public function Grade(): BelongsTo
    {
        return $this->belongsTo(grade::class);
    }
    public function Department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
