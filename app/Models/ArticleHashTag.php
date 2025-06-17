<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleHashTag extends Model
{
    use HasFactory;
    protected $casts = [
        'locale' => 'array',
    ];
    protected $fillable = ['locale'];

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }
}
