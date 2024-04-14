<?php

use App\Http\Controllers\DutyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Dashboard de plantões
Route::get('/plantao/dashboard', [DutyController::class, 'index']);
Route::get('/plantao/novo', [DutyController::class, 'create']);
Route::get('/plantao/selected/{id}', [DutyController::class, 'selected']);

