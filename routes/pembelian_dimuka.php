<?php

use App\Http\Controllers\PembelianDimukaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PembelianDimukaController::class, 'index'])->name("get");
Route::post('/', [PembelianDimukaController::class, 'store'])->name("store");
Route::patch('/', [PembelianDimukaController::class, 'update'])->name("update");
Route::delete('/', [PembelianDimukaController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [PembelianDimukaController::class, 'edit'])->name("edit");
