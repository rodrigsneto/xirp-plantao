<?php

use App\Http\Controllers\DutyController;
use Illuminate\Support\Facades\Route;

// Plantões
Route::get('/plantoes', [DutyController::class, 'read'])->name('duty.index');
Route::get('/novo', [DutyController::class, 'create'])->name('duty.create');
Route::post('/plantao', [DutyController::class, 'store'])->name('duty.store');
Route::get('/editar/{plantao}/', [DutyController::class, 'edit'])->name('duty.edit');
Route::put('/editar/{plantao}/update', [DutyController::class, 'update'])->name('duty.update');

// Atendimentos dos plantões
Route::get('/atendimentos/view/{plantao}/', [DutyController::class, 'dutyservices_read'])->name('dutyservices.index');
Route::get('/atendimentos/novo/{plantao}/', [DutyController::class, 'dutyservice_create'])->name('dutyservices.create');
Route::post('/atendimentos/{plantao}/', [DutyController::class, 'dutyservice_store'])->name('dutyservices.store');
Route::delete('/atendimentos/{plantao}/delete/{atendimento}', [DutyController::class, 'dutyservice_delete'])->name('dutyservices.delete');

