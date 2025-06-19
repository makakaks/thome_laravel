<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleHashTag;
use App\Models\ArticleTag;
use App\Models\ArticleTranslation;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    function index(Request $request)
    {
        $query = Article::query();
        $tags = ArticleTag::all();

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';

            $query->whereHas('translations', function ($q) use ($searchTerm) {
                $q->where('title', 'like', $searchTerm);
            });
        }

        if ($request->filled('tag')) {
            $query->whereHas('articleTags.translations', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->tag . '%');
            });
        }

        $articles = $query->paginate(16)->appends($request->except('page'));

        foreach ($articles as $article) {
            $article->translation = $article->translation();
            $article->tags = $article->articleTags->map(function ($tag) {
                return $tag->translation();
            });
        }

        foreach ($tags as $tag) {
            $tag->translation = $tag->translation();
        }

        return view('home.article.index', compact('articles', 'tags'));
    }

    public function show_article(Request $request)
    {
        $news_id = $request->news_id;
        $article = Article::where('id', $news_id)->firstOrFail();

        $article->translation = $article->translation();
        $article->tags = $article->articleTags->map(function ($tag) {
            return $tag->translation();
        });
        $article->hashtags = $article->articleHashTags->translation();

        return view('home.article.show_article', compact('article'));
    }


    ////////////////////
    // admin
    function manage(Request $request)
    {
        $query = Article::query();
        $tags = ArticleTag::all();

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%'; // กำหนดตัวแปรสำหรับคำค้นหา

            $query->whereHas('translations', function ($q) use ($searchTerm) {
                $q->where('title', 'like', $searchTerm);
            });
        }

        if ($request->filled('tag')) {
            $query->whereHas('articleTags', function ($q) use ($request) {
                $q->where('article_tag_id', $request->tag);
            });
        }

        $articles = $query->paginate(8)->appends($request->except('page'));

        foreach ($articles as $article) {
            $article->translation = $article->translation();
            $article->tags = $article->articleTags->map(function ($tag) {
                return $tag->translation();
            });
            $availablelang = [];
            foreach ($article->translations as $translation) {
                $availablelang[] = $translation->locale;
            }
            $article->availablelang = $availablelang;
        }

        foreach ($tags as $tag) {
            $tag->translation = $tag->translation();
            $tag->th = $tag->translation('th');
            $tag->en = $tag->translation('en');
            $tag->cn = $tag->translation('cn');
        }

        return view('admin.article.manage', compact('articles', 'tags'));
    }

    function delete($id)
    {
        try {
            $article = Article::findOrFail($id);
            $article->delete();
            return response()->json(['message' => 'Article deleted successfully.']);
        } catch (Exception $e) {
            return response()->json(['message' => 'Article not found.'], 404);
        }
    }

    public function create_view()
    {
        $tags = ArticleTag::all();
        foreach ($tags as $tag) {
            $tag->translation = $tag->translation();
        }
        return view('admin.article.create', compact('tags'));
    }

    // ok
    public function create_store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'coverPageImg' => 'required',
                'tags' => 'required|array',
                'hashtags' => 'required|array',
            ]);
            $article = Article::create();

            $article->translations()->create([
                'locale' => 'th',
                'title' => $request["title"],
                'content' => $request["content"],
                'coverPageImg' => $request['coverPageImg'],
            ]);

            $article->articleTags()->attach($request['tags']);
            $article->articleHashTags()->create([
                'locale' => $request->hashtags,
            ]);
            return response()->json(['message' => 'Article created successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error creating Article: ' . $e->getMessage()], 500);
        }
    }

    public function edit_view($id, Request $request)
    {
        $lang = $request->lang;

        $article = Article::where('id', $id)->firstOrFail();
        $article->translation = $article->translation($lang);
        $article->tags = $article->articleTags->map(function ($tag) {
            return $tag->translation();
        });

        // $article->hashtags = $article->articleHashTagsTranslation;
        $article->hashtags = $article->articleHashTags->locale;

        $tags = ArticleTag::all();
        foreach ($tags as $tag) {
            $tag->translation = $tag->translation();
        }

        return view('admin.article.create', compact('article', 'tags'));
    }

    public function edit_store(Request $request, $id)
    {
        $article = Article::where('id', $id)->first();
        try {
            $oldImg = (string) $article->translation($request->lang)->coverPageImg;
            $article->translation($request->lang)->update([
                'title' => $request["title"],
                'content' => $request["content"],
                'coverPageImg' => $request['coverPageImg']
            ]);

            // return response()->json(['message' => $request->lang], 500);

            $article->articleTags()->sync($request['tags']);
            $article->articleHashTags()->update(['locale' => $request['hashtags']]);
            if ($oldImg != $article->translation($request->lang)->coverPageImg) {
                Storage::delete(Str::replaceFirst('/storage', 'public', $oldImg));
            }
            return response()->json(['message' => 'Article update successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error updating FAQ: ' . $e->getMessage()], 500);
        }
    }

    public function add_lang_view($id, Request $request)
    {
        $lang = $request->lang;

        $article = Article::where('id', $id)->firstOrFail();
        $article->translation = $article->translation();
        // $article->tags = $article->articleTags->map(function ($tag) {
        //     return $tag->translation();
        // });

        // $article->hashtags = $article->articleHashTags->locale;

        $tags = ArticleTag::all();
        foreach ($tags as $tag) {
            $tag->translation = $tag->translation();
        }

        return view('admin.article.create', compact('article', 'tags'));
    }

    public function add_lang_store(Request $request, $id)
    {
        try {
            $article = Article::where('id', $id)->first();
            $article->translations()->create([
                'locale' => $request->lang,
                'title' => $request["title"],
                'content' => $request["content"],
                'coverPageImg' => $request['coverPageImg']
            ]);
            return response()->json(['message' => 'Article add lang successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error updating FAQ: ' . $e->getMessage()], 500);
        }
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

    function edit_tag(Request $request)
    {
        try {
            // return response()->json(['message' => $request['locale']], 400);
            $request->validate([
                'locale' => 'required|string|max:5',
                'name' => 'required|string',
            ]);

            $tag = ArticleTag::findOrFail($request->id);
            if (!$tag) {
                return response()->json(['message' => 'Tag not found.'], 404);
            }
            $tag->translations()->updateOrCreate(
                ['locale' => $request['locale']],
                ['name' => $request['name']]
            );

            return response()->json(['message' => 'Tag created successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error creating tag: ' . $e->getMessage()], 500);
        }
    }

    function edit_id(Request $request, $id)
    {
        try {
            $change_id = $request->change_id;

            $isAvailable = Article::where('id', $change_id)->exists();
            if ($isAvailable) {
                return response()->json(['message' => 'id already used'], 400);
            }
            $tag = Article::findOrFail($id);
            $tag->update(['id' => $change_id]);
            return response()->json(['message' => 'ID updated successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error updating tag ID: ' . $e->getMessage()], 500);
        }
    }

    function delete_tag($id)
    {
        try {
            $tag = ArticleTag::findOrFail($id);
            $tag->delete();
            return response()->json(['message' => 'Tag deleted successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error deleting tag: ' . $e->getMessage()], 500);
        }
    }

    static public function get_latest_articles($count = 5)
    {
        $articles = Article::latest()->take($count)->get();

        foreach ($articles as $article) {
            $article->translation = $article->translation();
            $article->tags = $article->articleTags->map(function ($tag) {
                return $tag->translation();
            });
        }

        return $articles;
    }
}
