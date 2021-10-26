<?php

use App\Http\Controllers\PenagihanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PenagihanController::class, 'index'])->name("get");
Route::post('/', [PenagihanController::class, 'store'])->name("store");
Route::patch('/', [PenagihanController::class, 'update'])->name("update");
Route::delete('/', [PenagihanController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [PenagihanController::class, 'edit'])->name("edit");
