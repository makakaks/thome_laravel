<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastwork extends Model
{
    use HasFactory;

    protected $fillable = ['page', 'title', 'detail', 'images'];

    protected $casts = [
        'title' => 'array',
        'detail' => 'array',
        'images' => 'array',
    ];

    public function translation($locale = 'en')
    {
        return [
            'title' => $this->title[$locale] ?? $this->title['en'] ?? $this->title['th'] ?? '',
            'detail' => $this->detail[$locale] ?? $this->detail['en'] ?? $this->detail['th'] ?? '',
        ];
    }

}
