<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;
use App\Models\Department;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class grade extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'department_id'];
    public function students(): HasMany
    {
        return $this->hasMany(student::class, 'grade_id');
    }
    public function Department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
