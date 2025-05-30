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
    //
    function manage()
    {
        $articles = Article::all();
        foreach ($articles as $article) {
            $article = tap($article, function ($article) {
                $article->translation = $article->translation();
                $article->tags = $article->articleTags->map(function ($tag) {
                    return $tag->translation();
                });
            });
        }
        return view('admin.article.manage_articles', ['articles' => $articles]);
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
        $tag = ArticleTag::all();
        return view('admin.article.create_article', compact('tag'));
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

        $tag = ArticleTag::all();

        return view('admin.article.create_article', compact('article', 'tag'));
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
        $tag = ArticleTag::create([
            'slug' => $request->slug,
            'status' => '1',
        ]);

        foreach ($request['locale'] as $lang) {
            $tag->translations()->create([
                'locale' => $lang['locale'],
                'name' => $lang["name"],
            ]);
        }

        return response()->json(['message' => 'Tag created successfully.'], 200);
    }
}
