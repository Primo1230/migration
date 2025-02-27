<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index() {
        return Equipment::all(); 
    }

    public function show($id) {
        return Equipment::findOrFail($id); 
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);
        return Equipment::create($data); 
    }

    public function update(Request $request, $id) {
        $equipment = Equipment::findOrFail($id);
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);
        $equipment->update($data);
        return $equipment; 
    }

    public function destroy($id) {
        return Equipment::destroy($id); 
    }
}
