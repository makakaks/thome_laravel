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
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:10000',

            // สุขาภิบาล
            'has_septic_tank' => 'nullable|boolean',
            'septic_tank_spec' => 'nullable|string',
            'has_order_trap' => 'nullable|boolean',
            'order_trap_spec' => 'nullable|string',
            'has_grase_trap' => 'nullable|boolean',
            'grase_trap_spec' => 'nullable|string',
            'has_water_tank' => 'nullable|boolean',
            'water_tank_spec' => 'nullable|string',
            'has_water_pump' => 'nullable|boolean',
            'water_pump_spec' => 'nullable|string',
            'has_pipe_termites' => 'nullable|boolean',
            'pipe_termites_spec' => 'nullable|string',

            // หลังคา
            'has_solar_roof' => 'nullable|boolean',
            'solar_roof_spec' => 'nullable|string',
            'has_insulation' => 'nullable|boolean',
            'insulation_spec' => 'nullable|string',
            'has_roof_ventilator' => 'nullable|boolean',
            'roof_ventilator_spec' => 'nullable|string',

            // ไฟฟ้า
            'has_electric_meter' => 'nullable|boolean',
            'electric_meter_spec' => 'nullable|string',
            'has_main_breaker' => 'nullable|boolean',
            'main_breaker_spec' => 'nullable|string',
            'has_rcd' => 'nullable|boolean',
            'rcd_spec' => 'nullable|string',
            'has_ev_charger' => 'nullable|boolean',
            'ev_charger_spec' => 'nullable|string',
            'has_emergency_light' => 'nullable|boolean',
            'emergency_light_spec' => 'nullable|string',
            'has_door_automatic' => 'nullable|boolean',
            'door_automatic_spec' => 'nullable|string',
            'has_smoke_detector' => 'nullable|boolean',
            'smoke_detector_spec' => 'nullable|string',
            'has_rcd_1st' => 'nullable|boolean',
            'rcd_1st_spec' => 'nullable|string',
            'has_rcd_2nd' => 'nullable|boolean',
            'rcd_2nd_spec' => 'nullable|string',
            'has_heat_detector' => 'nullable|boolean',
            'heat_detector_spec' => 'nullable|string',

            // สมาร์ทโฮม & ความปลอดภัย
            'has_smart_home' => 'nullable|boolean',
            'smart_home_spec' => 'nullable|string',
            'has_security_home_system' => 'nullable|boolean',
            'security_home_system_spec' => 'nullable|string',
            'has_cctv_camera' => 'nullable|boolean',
            'cctv_camera_spec' => 'nullable|string',
            'has_door_bell' => 'nullable|boolean',
            'door_bell_spec' => 'nullable|string',
            'has_plug_switch' => 'nullable|boolean',
            'plug_switch_spec' => 'nullable|string',
            'has_garage_door' => 'nullable|boolean',
            'garage_door_spec' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('image'), $imageName);
            $validated['image'] = $imageName;
        }

        House::create($validated);
        return redirect()->route('admin.compare.compare_house')->with('success', 'เพิ่มบ้านเรียบร้อยแล้ว');
    }

    public function adminView(){
        $houses = House::all();
        return view('admin.compare.compare_house', compact('houses'));
    }

    public function comparisonView(Request $request)
    {
        $houseIds = $request->get('houses');

        if (!$houseIds) {

            if ($request->routeIs('admin.compare.compare_frontend')) {
                return \View::make('admin.compare.compare_frontend')->with('errors', ['ไม่พบข้อมูลบ้านที่ต้องการเปรียบเทียบ']);
            }

            return redirect()->route('admin.compare.compare_frontend')
                ->with('error', 'ไม่พบข้อมูลบ้านที่ต้องการเปรียบเทียบ');
        }

        $ids = explode(',', $houseIds);
        $houses = House::whereIn('id', $ids)->get();
        
        if ($houses->count() < 2) {
            return redirect()->route('admin.compare.compare_frontend')->with('error', 'กรุณาเลือกบ้านอย่างน้อย 2 หลังเพื่อเปรียบเทียบ');
        }

        return view('admin.compare.comparison', compact('houses'));
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