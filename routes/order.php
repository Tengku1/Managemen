<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OrderController::class, 'index'])->name("get");
Route::post('/', [OrderController::class, 'store'])->name("store");
Route::patch('/', [OrderController::class, 'update'])->name("update");
Route::delete('/', [OrderController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [OrderController::class, 'edit'])->name("edit");
