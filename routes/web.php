<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/agent', function () {
    return view('about');
});

Route::get('/property', function () {
    return view('property-grid');
});



Route::get('/property', [PropertyController::class, 'index']);
Route::get('/single-property/{id}', [PropertyController::class, 'show'])->name('property.single');
Route::post('/submit-agent', [AgentController::class, 'store'])->name('submit-agent-form');
