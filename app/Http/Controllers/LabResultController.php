<?php

namespace App\Http\Controllers;

use App\Models\LabResult;
use Illuminate\Http\Request;

class LabResultController extends Controller
{
    public function index() {
        return LabResult::all(); 
    }

    public function show($id) {
        return LabResult::findOrFail($id); 
    }

    public function store(Request $request) {
        $data = $request->validate([
            'test_id' => 'required|exists:lab_tests,id',
            'result' => 'required'
        ]);
        return LabResult::create($data); 
    }

    public function update(Request $request, $id) {
        $labResult = LabResult::findOrFail($id);
        $data = $request->validate([
            'test_id' => 'required|exists:lab_tests,id',
            'result' => 'required'
        ]);
        $labResult->update($data);
        return $labResult; 
    }

    public function destroy($id) {
        return LabResult::destroy($id); 
    }
}
