<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Pastwork extends Model
{
    use HasFactory;

    protected $fillable = ['page', 'coverPageImg','title', 'detail', 'images'];

    protected $casts = [
        'title' => 'array',
        'detail' => 'array',
        'images' => 'array',
    ];

    public function translation($locale = null)
    {
        $locale = $locale ?? App::getLocale();
        return [
            'title' => $this->title[$locale] ?? $this->title['en'] ?? $this->title['th'] ?? '',
            'detail' => $this->detail[$locale] ?? $this->detail['en'] ?? $this->detail['th'] ?? '',
        ];
    }

    public function pastWorkTag()
    {
        return $this->belongsTo(PastWorkTag::class);
    }

}
