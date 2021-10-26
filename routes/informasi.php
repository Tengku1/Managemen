<?php

use App\Http\Controllers\InformasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InformasiController::class, 'index'])->name("get");
Route::post('/', [InformasiController::class, 'store'])->name("store");
Route::patch('/', [InformasiController::class, 'update'])->name("update");
Route::delete('/', [InformasiController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [InformasiController::class, 'edit'])->name("edit");
