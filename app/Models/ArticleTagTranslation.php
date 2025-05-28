<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTagTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['article_tag_id', 'locale', 'name'];

    function articleTag()
    {
        return $this->belongsTo(ArticleTag::class);
    }
}
