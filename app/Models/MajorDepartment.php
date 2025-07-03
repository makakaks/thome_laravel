<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorDepartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'locale'
    ];

    protected $casts = [
        'locale' => 'array'
    ];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function employees()
    {
        return $this->hasManyThrough(Employee::class, Department::class);
    }
}
