<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'locale',
        'name',
        'description'
    ];

    public function derpartment()
    {
        return $this->belongsTo(Department::class);
    }
}
