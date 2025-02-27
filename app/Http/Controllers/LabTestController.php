<?php

namespace App\Http\Controllers;

use App\Models\LabTest;
use Illuminate\Http\Request;

class LabTestController extends Controller
{
    public function index() {
        return LabTest::all(); 
    }

    public function show($id) {
        return LabTest::findOrFail($id); 
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);
    
        $labTest = LabTest::create($data); 
    
        return response()->json($labTest, 201); 
    }
    

    public function update(Request $request, $id) {
        $labTest = LabTest::findOrFail($id);
    
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);
    
        $labTest->update($data); 
    
        return response()->json($labTest, 200);
    }
    public function destroy($id) {
        $labTest = LabTest::find($id);

        if (!$labTest) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $labTest->delete();

        return response()->json(['message' => 'Deleted successfully'], 200);
    }
    
}
