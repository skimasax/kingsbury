<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/agent', function () {
    return view('about');
});

Route::post('/submit-agent', [AgentController::class, 'store'])->name('submit-agent-form');
