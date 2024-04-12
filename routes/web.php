<?php

use App\Http\Controllers\PlantaoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Dashboard de plantões
Route::get('/plantao-dashboard', [PlantaoController::class, 'index']);
Route::get('/plantao-dashboard/create', [PlantaoController::class, 'create']);
Route::get('/plantao-selected/{id}', [PlantaoController::class, 'selected']);

