<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageVariable;
use Illuminate\Support\Facades\Redirect;
use App\Models\Pastwork;

use Illuminate\Support\Facades\Storage;

class StaticPageController extends Controller
{
    //
    protected $projectPath = ['hinspector', 'hinterior', 'hconstruction', 'hbutler', 'other'];

    public function index()
    {
        return view('admin.static_page.index');
    }

    public function home()
    {
        $page = PageVariable::where('page', 'home')->first();
        $page = $page ? $page->var : [];
        return view('admin.static_page.home', [
            'dev' => $page['dev'],
            'project' => $page['project'],
            'house' => $page['house'],
            'satisfaction' => $page['satisfaction']]
        );
    }

    public function home_store(){
        $page = PageVariable::where("page", "home")->first();
        $page->var = [
            'dev' => request('dev', ''),
            'project' => request('project', ''),
            'house' => request('house', ''),
            'satisfaction' => request('satisfaction', '')
        ];
        $page->save();
        return Redirect::back()->with('status', 'Variables updated');
        // return redirect()->back()->with('success', 'Variables updated');
        // return Redirect::route('profile.edit')->with('status', 'profile-updated')
    }

    // project
    public function manage_project($pageName) {
        if (!in_array($pageName, $this->projectPath)) {
            return redirect()->back()->with('error', 'Invalid project path');
        }
        $projects = Pastwork::where('page', $pageName)->get();
        foreach ($projects as $project) {
            $project->translation = $project->translation();
        }
        return view('admin.static_page.manage_project', compact('projects', 'pageName'));
    }

    public function create_project(Request $request, $pageName) {
        $request->validate([
            'coverPageImg' => 'required|string',
            'title' => 'required|string',
            'detail' => 'required|string',
            'images' => 'required|array',
        ]);

        $images = $request->images;
        $folderName = 'project/' . $pageName . '/';

        for($index = 0; $index < count($images); $index++) {
            $fileName = basename($images[$index]);
            if (Storage::exists('public/temp_uploads/' . $fileName)) {
                Storage::move('public/temp_uploads/' . $fileName, 'public/' . $folderName . $fileName);
                $images[$index] = "/storage" . "/" . $folderName . $fileName;
            }
        }

        $project = Pastwork::create([
            'coverPageImg' => $request->coverPageImg,
            'page' => $pageName,
            'title' => ['th' => $request->title],
            'detail' => ['th' => $request->detail],
            'images' => $request->images,
        ]);

        return redirect()->back()->with('success', 'Project created successfully');
    }


    public function update_project(Request $request, $pageName) {
        $request->validate([
            'title' => 'required|array',
            'detail' => 'required|array',
            'images' => 'nullable|array',
        ]);

        $project = Pastwork::where('page', $pageName)->first();
        if (!$project) {
            return redirect()->back()->with('error', 'Project not found');
        }

        $project->update([
            'title' => $request->input('title'),
            'detail' => $request->input('detail'),
            'images' => $request->input('images', []),
        ]);

        return redirect()->back()->with('success', 'Project updated successfully');
    }

}
