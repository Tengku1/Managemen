<?php

use App\Http\Controllers\RekapPembelianController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RekapPembelianController::class, 'index'])->name("get");
Route::post('/', [RekapPembelianController::class, 'store'])->name("store");
Route::patch('/', [RekapPembelianController::class, 'update'])->name("update");
Route::delete('/', [RekapPembelianController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [RekapPembelianController::class, 'edit'])->name("edit");
