<?php

use App\Http\Controllers\HutangController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HutangController::class, 'index'])->name("get");
Route::post('/', [HutangController::class, 'store'])->name("store");
Route::patch('/', [HutangController::class, 'update'])->name("update");
Route::delete('/', [HutangController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [HutangController::class, 'edit'])->name("edit");
