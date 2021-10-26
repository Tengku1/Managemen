<?php

use App\Http\Controllers\KasbonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [KasbonController::class, 'index'])->name("get");
Route::post('/', [KasbonController::class, 'store'])->name("store");
Route::patch('/', [KasbonController::class, 'update'])->name("update");
Route::delete('/', [KasbonController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [KasbonController::class, 'edit'])->name("edit");
