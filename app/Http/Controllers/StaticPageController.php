<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageVariable;
use Illuminate\Support\Facades\Redirect;


class StaticPageController extends Controller
{
    //
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
}
