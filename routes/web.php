<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabTestController;
use App\Http\Controllers\LabResultController;
use App\Http\Controllers\EquipmentController;

Route::get('/', function () {
    return view('welcome');
}); // Default Laravel homepage

// CRUD Routes for all tables
Route::resources([
    'lab-tests' => LabTestController::class,
    'lab-results' => LabResultController::class,
    'equipment' => EquipmentController::class,
]);
