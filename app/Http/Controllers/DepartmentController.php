<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use Exception;

class DepartmentController extends Controller
{
    //
    function create(Request $request)
    {
        $request = $request->json()->all();
        try {
            $department = Department::create([]);
            $department->d_order = $department->id;
            $department->save();
            $department->translations()->create([
                'locale' => $request['locale'],
                'name' => $request['name'],
            ]);

            return response()->json(['message' => 'Department created successfully', 'id' => $department->id]);
        } catch (Exception $e) {
            return response()->json(['message' => 'An error occurred while creating the department: ' . $e->getMessage()], 500);
        }
    }

    function edit(Request $request)
    {
        try {
            $department = Department::findOrFail($request->id);
            $request = $request->json()->all();
            $department->translations()->updateOrCreate(
                ['locale' => $request['locale']],
                ['name' => $request['name']]
            );

            return response()->json(['message' => 'Department updated successfully']);
        } catch (Exception $e) {
            return response()->json(['message' => 'An error occurred while editing the department: ' . $e->getMessage()], 500);
        }
    }

    function delete(Request $request)
    {
        Department::findOrFail($request->id)->delete();
    }

    function add_lang(Request $request)
    {
        $department = Department::findOrFail($request->id);
        $department->translations()->updateOrCreate(
            ['locale' => $request->locale],
            ['name' => $request->name]
        );

        return response()->json(['message' => 'Department language added successfully']);
    }

    function reorder(Request $request)
    {
        try {
            $order = $request->json()->all();
            for ($index = 0; $index < count($order); $index++) {
                $department = Department::findOrFail($order[$index]);
                if ($department) {
                    $department->d_order = $index;
                    $department->save();
                }
            }
            return response()->json(['message' => 'Departments reordered successfully']);
        } catch (Exception $e) {
            return response()->json(['message' => 'An error occurred while reordering departments: ' . $e->getMessage()], 500);
        }
    }



    // Api part
    function api_get_available_lang() {}
}
