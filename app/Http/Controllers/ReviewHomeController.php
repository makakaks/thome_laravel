<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewHomeController extends Controller
{
    function manage()
    {
        $houses = [
            ['id' => 1, 'name' => 'House 1', 'tag' => 'tag1'],
            ['id' => 2, 'name' => 'House 2', 'tag' => 'tag2'],
            ['id' => 3, 'name' => 'House 3', 'tag' => 'tag3'],
            ['id' => 4, 'name' => 'House 4', 'tag' => 'tag3'],
            ['id' => 5, 'name' => 'House 5', 'tag' => 'tag3'],
            ['id' => 6, 'name' => 'House 6', 'tag' => 'tag3'],
            ['id' => 7, 'name' => 'House 7', 'tag' => 'tag3'],
            ['id' => 8, 'name' => 'House 8', 'tag' => 'tag3'],
            ['id' => 9, 'name' => 'House 9', 'tag' => 'tag3'],
            ['id' => 10, 'name' => 'House 10', 'tag' => 'tag3'],
            ['id' => 11, 'name' => 'House 11', 'tag' => 'tag3'],
        ];
        return view('admin.review_home.manage_review_home', ['houses' => $houses]);
    }

    function create_view()
    {
        return view('admin.review_home.create_review_home');
    }

    function create_store(Request $request)
    {
        // Validate and store the review home data
        // Assuming you have a ReviewHome model to handle the data storage
        // ReviewHome::create($request->all());

        // For now, just redirect back with a success message
        return redirect()->route('admin.home.create')->with('success', 'Review home created successfully.');
    }

    function edit_view()
    {
        return view('admin.review_home.create_review_home');
    }

    function edit_store(Request $request, $id)
    {
        // Validate and update the review home data
        // Assuming you have a ReviewHome model to handle the data storage
        // $reviewHome = ReviewHome::findOrFail($id);
        // $reviewHome->update($request->all());

        // For now, just redirect back with a success message
        return redirect()->route('admin.home.create')->with('success', 'Review home updated successfully.');
    }
}
