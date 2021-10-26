<?php

use App\Http\Controllers\FakturController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FakturController::class, 'index'])->name("get");
Route::post('/', [FakturController::class, 'store'])->name("store");
Route::patch('/', [FakturController::class, 'update'])->name("update");
Route::delete('/', [FakturController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [FakturController::class, 'edit'])->name("edit");
