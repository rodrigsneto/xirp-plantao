<?php

use App\Http\Controllers\DutyController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DutyController::class, 'index']);

// Dashboard de plantões
Route::get('/plantao', [DutyController::class, 'index'])->name('plantao.dashboard');
Route::get('/plantao/novo', [DutyController::class, 'create'])->name('plantao.create');
Route::post('/plantao', [DutyController::class, 'store'])->name('plantao.store');

Route::get('/plantao/selected/{id}', [DutyController::class, 'selected']);
Route::get('/plantao/atendimentos/novo', [DutyController::class, 'new_dutyservice']);
Route::post('/plantao/atendimentos/novo', [DutyController::class, 'new_dutyservice_action']);

