<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'd_order'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        // 'translations',
        // 'employees'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function translations()
    {
        return $this->hasMany(DepartmentTranslation::class);
    }

    public function translation($locale = null)
    {
        $locale = $locale ?? App::getLocale();
        $result = $this->translations->where('locale', $locale)->first();
        if (!$result) {
            $result = $this->translations->first();
        }
        return $result;
    }
}
