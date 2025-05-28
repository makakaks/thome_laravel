<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'status'];

    public function translations()
    {
        return $this->hasMany(ArticleTranslation::class);
    }

    function articleTags()
    {
        return $this->belongsToMany(ArticleTag::class, 'article_with_tag');
    }

    public function translation($locale = null)
    {
        $locale = $locale ?? App::getLocale();
        return $this->translations()->where('locale', $locale)->first();
    }   
}
