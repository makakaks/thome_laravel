<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\ArticleTranslation;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    //
    public function index(){
        return 'test jajaaa';
    }

    public function show_article($slug){
        $article = tap(Article::with('articleTags')->where('slug', $slug)->firstOrFail(), function ($article) {
            $article->translation = $article->translation();
            $article->tags = $article->articleTags->map(function($tag){
                return $tag->translation();
            });
        });
        
        return view('home.article.show_article', ['article' => $article, 'locale' => Session::get('locale')]);
    }
}
