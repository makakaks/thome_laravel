<?php

namespace App\Http\Controllers;

use App\Models\ReviewHome;
use App\Models\ReviewHomeProject;
use App\Models\ReviewHomeTranslation;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReviewHomeController extends Controller
{
    function index(Request $request)
    {
        $query = ReviewHome::query();
        $projects = ReviewHomeProject::all();

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';

            $query->whereHas('translations', function ($q) use ($searchTerm) {
                $q->where('title', 'like', $searchTerm);
            });
        }

        if ($request->filled('project')) {
            $query->whereHas('houseTags.translations', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->project . '%');
            });
        }

        $houses = $query->paginate(16)->appends($request->except('page'));

        foreach ($houses as $house) {
            $house->translation = $house->translation();
            $house->projects = $house->houseTags->map(function ($project) {
                return $project->translation();
            });
        }

        foreach ($projects as $project) {
            $project->translation = $project->translation();
        }

        return view('home.house.index', compact('houses', 'projects'));
    }

    public function show_house(Request $request)
    {
        $news_id = $request->news_id;
        $house = ReviewHome::where('id', $news_id)->firstOrFail();

        $house->translation = $house->translation();
        $house->projects = $house->houseTags->map(function ($project) {
            return $project->translation();
        });
        $house->hashprojects = $house->houseHashTagsTranslation();

        return view('home.house.show_house', compact('house'));
    }


    ////////////////////
    // admin
    function manage(Request $request)
    {
        $query = ReviewHome::query();
        $projects = ReviewHomeProject::all();

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%'; // กำหนดตัวแปรสำหรับคำค้นหา

            $query->whereHas('translations', function ($q) use ($searchTerm) {
                $q->where('title', 'like', $searchTerm);
            });
        }

        if ($request->filled('project')) {
            $query->where('project_id', $request->project);
        }

        $houses = $query->paginate(8)->appends($request->except('page'));

        foreach ($houses as $house) {
            $house->translation = $house->translation();
            $house->project = $house->reviewHomeProject->translation();
            // dd($house->project);
            $availablelang = [];
            foreach ($house->translations as $translation) {
                $availablelang[] = $translation->locale;
            }
            $house->availablelang = $availablelang;
        }

        foreach ($projects as $project) {
            $project->translation = $project->translation();
            $project->th = $project->translation('th');
            $project->en = $project->translation('en');
            if ($project->hasTranslation('cn')) {
                $project->cn = $project->translation('cn');
            }
        }
        return view('admin.review_home.manage', compact('houses', 'projects'));
    }

    function delete($id)
    {
        try {
            $house = ReviewHome::findOrFail($id);
            $house->delete();
            return response()->json(['message' => 'ReviewHome deleted successfully.']);
        } catch (Exception $e) {
            return response()->json(['message' => 'ReviewHome not found.'], 404);
        }
    }

    public function create_view()
    {
        $projects = ReviewHomeProject::all();
        foreach ($projects as $project) {
            $project->translation = $project->translation();
        }
        return view('admin.review_home.create', compact('projects'));
    }

    // ok
    public function create_store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'coverPageImg' => 'required',
                'project' => 'required',
                'hashtags' => 'required|array',
            ]);

            $project = ReviewHomeProject::where('id', $request['project'])->first();
            if (!$project->exists()) {
                return response()->json(['message' => 'Project not found.'], 404);
            }

            $house = $project->reviewHomes()->create();

            $house->translations()->create([
                'locale' => 'th',
                'title' => $request["title"],
                'content' => $request["content"],
                'coverPageImg' => $request['coverPageImg'],
            ]);

            $house->reviewHomeHashtags()->create([
                'locale' => $request['hashtags'],
            ]);
            return response()->json(['message' => 'ReviewHome created successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error creating ReviewHome: ' . $e->getMessage()], 500);
        }
    }

    public function edit_view($id, Request $request)
    {
        $lang = $request->lang;

        $house = ReviewHome::where('id', $id)->firstOrFail();
        $house->translation = $house->translation($lang);
        $house->project = $house->reviewHomeProject->translation();

        // $house->hashprojects = $house->houseHashTagsTranslation;
        $house->hashtags = $house->reviewHomeHashtags->locale;

        $projects = ReviewHomeProject::all();
        foreach ($projects as $project) {
            $project->translation = $project->translation();
        }

        return view('admin.review_home.create', compact('house', 'projects'));
    }

    public function edit_store(Request $request, $id)
    {
        $house = ReviewHome::where('id', $id)->first();
        try {
            $oldImg = (string) $house->translation($request->lang)->coverPageImg;
            $house->translation($request->lang)->update([
                'title' => $request["title"],
                'content' => $request["content"],
                'coverPageImg' => $request['coverPageImg']
            ]);

            // return response()->json(['message' => $request->lang], 500);

            $house->houseTags()->sync($request['projects']);
            $house->houseHashTags()->update(['locale' => $request['hashprojects']]);
            if ($oldImg != $house->translation($request->lang)->coverPageImg) {
                Storage::delete(Str::replaceFirst('/storage', 'public', $oldImg));
            }
            return response()->json(['message' => 'ReviewHome update successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error updating FAQ: ' . $e->getMessage()], 500);
        }
    }

    public function add_lang_view($id, Request $request)
    {
        $lang = $request->lang;

        $house = ReviewHome::where('id', $id)->firstOrFail();
        $house->translation = $house->translation();
        // $house->projects = $house->houseTags->map(function ($project) {
        //     return $project->translation();
        // });

        // $house->hashprojects = $house->houseHashTags->locale;

        $projects = ReviewHomeProject::all();
        foreach ($projects as $project) {
            $project->translation = $project->translation();
        }

        return view('admin.review_home.create', compact('house', 'projects'));
    }

    public function add_lang_store(Request $request, $id)
    {
        try {
            $house = ReviewHome::where('id', $id)->first();
            $house->translations()->create([
                'locale' => $request->lang,
                'title' => $request["title"],
                'content' => $request["content"],
                'coverPageImg' => $request['coverPageImg']
            ]);
            return response()->json(['message' => 'ReviewHome add lang successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error updating FAQ: ' . $e->getMessage()], 500);
        }
    }

    function create_project(Request $request)
    {
        try {
            $project = ReviewHomeProject::create([
                'locale' => ['en' => '', 'th' => '']
            ]);

            // typeof locale
            // In PHP, you can use gettype() to check the type
            // Example: gettype($project->locale)

            $locales = $project->locale;
            // return response()->json(['type' => gettype($locales)], 400);
            // return response()->json(['message' => 'Project '], 400);
            // return response()->json(['error' => 'ok'], 500);
            foreach ($request->all() as $lang => $name) {
                $locales[$lang] = $name;
            }

            $project->locale = $locales;
            $project->save();

            return response()->json($request, 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage(), 'request' => $request->all()], 500);
        }
    }

    function edit_project(Request $request)
    {
        try {
            // return response()->json(['message' => $request['locale']], 400);
            $request->validate([
                'locale' => 'required|string|max:5',
                'name' => 'required|string',
            ]);

            $project = ReviewHomeProject::findOrFail($request->id);
            if (!$project) {
                return response()->json(['message' => 'Tag not found.'], 404);
            }
            $locales = $project['locale'];
            $locales[$request->locale] = $request->name;
            $project->locale = $locales;
            $project->save();
            return response()->json(['message' => 'Tag created successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error creating project: ' . $e->getMessage()], 500);
        }
    }

    function delete_project($id)
    {
        try {
            $project = ReviewHomeProject::findOrFail($id);
            $project->delete();
            return response()->json(['message' => 'Tag deleted successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error deleting project: ' . $e->getMessage()], 500);
        }
    }

    static public function get_latest_houses($count = 5)
    {
        $houses = ReviewHome::latest()->take($count)->get();

        foreach ($houses as $house) {
            $house->translation = $house->translation();
            $house->projects = $house->houseTags->map(function ($project) {
                return $project->translation();
            });
        }

        return $houses;
    }
}
