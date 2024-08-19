<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;



Route::get('/agent', function () {
    return view('about');
});




Route::get('/', [PropertyController::class, 'home'])->name('home');
Route::get('/property', [PropertyController::class, 'index']);
Route::get('/land', [PropertyController::class, 'land']);
Route::post('/property-enquiry', [PropertyController::class, 'store'])->name('property-enquiry');
Route::get('/single-property/{id}', [PropertyController::class, 'show'])->name('property.single');
Route::post('/submit-agent', [AgentController::class, 'store'])->name('submit-agent-form');
