<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class ArticleTag extends Model
{
    use HasFactory;

    protected $fillable = [];

    function articles()
    {
        return $this->belongsToMany(Article::class, 'article_with_tag');
    }

    function translations()
    {
        return $this->hasMany(ArticleTagTranslation::class);
    }

    public function translation($locale = null)
    {
        $locale = $locale ?? Session::get('locale');
        return $this->translations()->where('locale', $locale)->first();
    }
}
