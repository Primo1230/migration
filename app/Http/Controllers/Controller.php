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
        return LabTest::findOrFail($id); // Show single record
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);
        return LabTest::create($data); // Insert new record
    }

    public function update(Request $request, $id) {
        $labTest = LabTest::findOrFail($id);
        $data = $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);
        $labTest->update($data);
        return $labTest; // Update record
    }

    public function destroy($id) {
        return LabTest::destroy($id); // Delete record
    }
}
