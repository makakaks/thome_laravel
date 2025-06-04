<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\ArticleTranslation;
use Exception;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //

    function index()
    {
        $article = Article::where('id', 1)->first();
        $translation = $article->translation(); // ได้ title/content ตามภาษา
        return view('admin.index', ['translation' => $translation]);
    }

    function upload_image(Request $request)
    {
        return Storage::putFileAs('public/' . $request['folder'], $request->file('image'), $request['filename']);
    }
    
    function change_password()
    {
        return view('admin.change_password');
    }

    


}
