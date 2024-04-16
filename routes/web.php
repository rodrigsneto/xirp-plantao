<?php

use App\Http\Controllers\DutyController;
use Illuminate\Support\Facades\Route;

// Dashboard de plantões
Route::get('/plantoes', [DutyController::class, 'read'])->name('plantao.index');
Route::get('/novo', [DutyController::class, 'create'])->name('plantao.create');
Route::post('/plantao', [DutyController::class, 'store'])->name('plantao.store');

// Atendimentos dos plantões
Route::get('/atendimentos', [DutyController::class, 'dutyservices_read'])->name('dutyservices.index');
Route::get('/atendimentos/novo', [DutyController::class, 'dutyservice_create'])->name('dutyservices.create');
Route::post('/atendimentos', [DutyController::class, 'dutyservice_store'])->name('dutyservices.store');

