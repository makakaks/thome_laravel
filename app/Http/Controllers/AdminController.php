<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index()
    {
        return view('admin.index');
    }

    function about(){
        $name = "Jojo";
        $age = 25;
        return view('admin.about', compact('name', 'age'));
    }
}
