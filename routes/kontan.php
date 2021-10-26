<?php

use App\Http\Controllers\PembelianKontanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PembelianKontanController::class, 'index'])->name("get");
Route::post('/', [PembelianKontanController::class, 'store'])->name("store");
Route::patch('/', [PembelianKontanController::class, 'update'])->name("update");
Route::delete('/', [PembelianKontanController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [PembelianKontanController::class, 'edit'])->name("edit");
