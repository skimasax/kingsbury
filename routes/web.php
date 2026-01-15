<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

// Modern Routes
Route::get('/', [PropertyController::class, 'modernHome'])->name('home');
Route::get('/property', [PropertyController::class, 'modernIndex']);
Route::get('/land', [PropertyController::class, 'modernLand']);
Route::get('/single-property/{id}', [PropertyController::class, 'modernShow'])->name('property.single');
Route::get('/agent', function () {
    return view('modern-agent');
});
Route::get('/about', function () {
    return view('modern-about');
})->name('about');

// Form Routes
Route::post('/property-enquiry', [PropertyController::class, 'store'])->name('property-enquiry');
Route::post('/submit-agent', [AgentController::class, 'store'])->name('submit-agent-form');

// Legacy Routes (for backward compatibility)
Route::get('/legacy', [PropertyController::class, 'home'])->name('legacy.home');
Route::get('/legacy/property', [PropertyController::class, 'index'])->name('legacy.property');
Route::get('/legacy/land', [PropertyController::class, 'land'])->name('legacy.land');
Route::get('/legacy/single-property/{id}', [PropertyController::class, 'show'])->name('legacy.property.single');
Route::get('/legacy/agent', function () {
    return view('about');
})->name('legacy.agent');
