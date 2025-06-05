<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\Faq;
use App\Models\FaqTag;
use App\Models\FaqTranslation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{

    function get_all() {}

    function manage(Request $request)
    {
        $query = Faq::query();
        $tags = FaqTag::all();

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';

            $query->whereHas('translations', function ($q) use ($searchTerm) {
                $q->where('question', 'like', $searchTerm)
                    ->orWhere('answer', 'like', $searchTerm);
            });
        }

        if ($request->filled('tag')) {
            $query->whereHas('faqTags', function ($q) use ($request) {
                $q->where('faq_tag_id', $request->tag);
            });
        }

        if ($request->has('page') && $request->page > $articles = $query->paginate(1)->lastPage()) {
            return redirect()->route('admin.article.manage', array_merge($request->except('page'), ['page' => 1]));
        }

        $faqs = $query->paginate(8)->appends($request->except('page'));

        foreach ($faqs as $faq) {
            $faq->translation = $faq->translation();
            $faq->th = $faq->translation('th');
            $faq->en = $faq->translation('en');
            $faq->tags = $faq->faqTags->map(function ($tag) {
                return $tag->translation();
            });
        }

        foreach ($tags as $tag) {
            $tag->translation = $tag->translation();
        }
        return view('admin.faq.manage_faq', compact('faqs', 'tags'));
    }

    function create_store(Request $request)
    {
        try {
            $faq = Faq::create();

            foreach ($request['locale'] as $lang) {
                $faq->translations()->create([
                    'locale' => $lang['locale'],
                    'question' => $lang['question'],
                    'answer' => $lang['answer'],
                ]);
            }

            $faq->faqTags()->attach($request['tags']);
            return response()->json(['message' => 'FAQ created successfully.']);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error creating FAQ: ' . $e->getMessage()], 500);
        }
        return redirect()->route('admin.faq.manage')->with('success', 'FAQ created successfully.');
    }

    function edit_store($id, Request $request)
    {
        $faq = Faq::findOrFail($id);
        try {

            foreach ($request['locale'] as $lang) {
                $faq->translations()->updateOrCreate(
                    ['locale' => $lang['locale']],
                    [
                        'question' => $lang['question'],
                        'answer' => $lang['answer'],
                    ]
                );
            }

            $faq->faqTags()->sync($request['tags']);
            return response()->json(['message' => 'FAQ updated successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error updating FAQ: ' . $e->getMessage()], 500);
        }
    }

    function delete($id)
    {
        try {
            $faq = Faq::findOrFail($id);
            $faq->delete();
            return response()->json(['message' => 'FAQ deleted successfully.'], 200);
        }catch (Exception $e) {
            return response()->json(['message' => 'Error deleting FAQ: ' . $e->getMessage()], 500);
        }
    }

    function create_tag(Request $request)
    {
        try {
            $tag = FaqTag::create();

            foreach ($request->all() as $lang) {
                $tag->translations()->create([
                    'locale' => $lang['locale'],
                    'name' => $lang['name'],
                ]);
            }

            return response()->json(['message' => 'Tag created successfully.'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Error creating tag: ' . $e->getMessage()], 500);
        }
    }


    function get_translate($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->th = $faq->translation('th');
        $faq->en = $faq->translation('en');
        return response()->json($faq);
    }
}
