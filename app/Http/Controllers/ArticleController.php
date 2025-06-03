<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\ArticleTranslation;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    function index()
    {

        return view('home.article.index', ['articles' => Article::paginate()]);
    }

    function test_paginate(Request $request)
    {
        $articles = Article::paginate(2);

        foreach ($articles as $article) {
            $article->translation = $article->translation();
            $article->tags = $article->articleTags->map(function ($tag) {
                return $tag->translation();
            });
        }

        return $articles;
    }

    //
    function manage(Request $request)
    {
        $query = Article::query();
        $tags = ArticleTag::all();

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%'; // กำหนดตัวแปรสำหรับคำค้นหา

            $query->where('slug', 'like', $searchTerm)
                ->orWhereHas('translations', function ($q) use ($searchTerm) {
                    $q->where('title', 'like', $searchTerm);
                });
        }

        if ($request->filled('tag')) {
            $query->whereHas('articleTags', function ($q) use ($request){
                $q->where('article_tag_id', $request->tag);
            });
        }

        if ($request->has('page') && $request->page > $articles = $query->paginate(1)->lastPage()) {
            return redirect()->route('admin.article.manage', array_merge($request->except('page'), ['page' => 1]));
        }

        $articles = $query->paginate(8)->appends($request->except('page'));

        foreach ($articles as $article) {
            $article->translation = $article->translation();
            $article->tags = $article->articleTags->map(function ($tag) {
                return $tag->translation();
            });
        }

        foreach ($tags as $tag) {
            $tag->translation = $tag->translation();
        }

        return view('admin.article.manage_articles', compact('articles', 'tags'));
    }

    function delete($id)
    {
        try {
            $article = Article::findOrFail($id);
            $article->delete();
            return response()->json(['message' => 'Article deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Article not found.'], 404);
        }
    }

    public function create_view()
    {
        $tags = ArticleTag::all();
        foreach ($tags as $tag) {
            $tag->translation = $tag->translation();
        }
        return view('admin.article.create_article', compact('tags'));
    }

    public function create_store(Request $request)
    {
        try {
            $article = Article::create([
                'slug' => $request->slug,
                'status' => '1',
            ]);

            foreach ($request['locale'] as $lang) {
                $article->translations()->create([
                    'locale' => $lang['locale'],
                    'title' => $lang["title"],
                    'content' => $lang["content"],
                    'coverPageImg' => $lang['coverPageImg'],
                ]);
            }

            $article->articleTags()->attach($request['tags']);
            return response()->json(['message' => 'Article created successfully.'], 200);
        } catch (Exception $e) {
            return response()->json($e, 500);
        }
    }

    public function edit_view($id)
    {
        $article = tap(Article::with('articleTags')->where('id', $id)->firstOrFail(), function ($article) {
            $article->th = $article->translation('th');
            $article->en = $article->translation('en');
            $article->tags = $article->articleTags->map(function ($tag) {
                return $tag->translation();
            });
        });

        $tags = ArticleTag::all();
        foreach ($tags as $tag) {
            $tag->translation = $tag->translation();
        }

        return view('admin.article.create_article', compact('article', 'tags'));
    }

    function edit_store(Request $request, $id)
    {
        $article = Article::where('id', $id)->first();
        $oldSlug = $article->slug;

        try {
            $article->update([
                'slug' => $request->slug,
                'status' => '1',
            ]);

            foreach ($request['locale'] as $lang) {
                $article->translations()->updateOrCreate(
                    ['locale' => $lang['locale']],
                    [
                        'title' => $lang["title"],
                        'content' => $lang["content"],
                        'coverPageImg' => $lang['coverPageImg'],
                    ]
                );
            }

            $article->articleTags()->sync($request['tags']);
            if ($oldSlug !== $request->slug) {
                Storage::deleteDirectory('public/article/' . $oldSlug);
            }
            return response()->json(['message' => 'Article created successfully.'], 200);
        } catch (Exception $e) {
            return response()->json($e, 500);
        }
    }

    public function show_article($slug)
    {
        $article = tap(Article::with('articleTags')->where('slug', $slug)->firstOrFail(), function ($article) {
            $article->translation = $article->translation();
            $article->tags = $article->articleTags->map(function ($tag) {
                return $tag->translation();
            });
        });

        return view('home.article.show_article', ['article' => $article, 'locale' => Session::get('locale')]);
    }

    function create_tag(Request $request)
    {
        try {
            $tag = ArticleTag::create();
            foreach ($request->all() as $lang) {
                $tag->translations()->create($lang);
            }
            return response()->json($request, 200);
            // return response()->json(['message' => 'Tag created successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage(), 'request' => $request->all()], 500);
        }
    }
}
