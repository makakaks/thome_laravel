<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    public function index()
    {
        return response()->json(House::all());
    }

    public function show($id)
    {
        return response()->json(House::findOrFail($id));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'area' => 'required|integer',
            'car_park' => 'required|integer',
            'location' => 'required|string',
            'type' => 'nullable|string',
            'floors' => 'nullable|integer',
            'year_built' => 'nullable|integer',
            'nearby_places' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:10000'
        ]);

        if ($request->hasFile('image')) {
        $imageName = time().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('image'), $imageName);
        $validated['image'] = $imageName; // <-- บันทึกชื่อไฟล์ที่แท้จริง
    }

        House::create($validated);
        return redirect('/admin/houses')->with('success', 'เพิ่มบ้านเรียบร้อยแล้ว');
    }

    public function adminView(){
            $houses = House::all();
            return view('admin.compare.compare_house', compact('houses'));
        }

    public function apiIndex() {
    $houses = House::all()->map(function ($house) {
        $house->image_url = $house->image ? asset('image/' . $house->image) : null;
        return $house;
    });

    return response()->json($houses);
}
    public function apiShow($id) {
            return House::findOrFail($id);
        }

}