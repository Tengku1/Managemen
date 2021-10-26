<?php

use App\Http\Controllers\BankController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BankController::class, 'index'])->name("get");
Route::post('/', [BankController::class, 'store'])->name("store");
Route::patch('/', [BankController::class, 'update'])->name("update");
Route::delete('/', [BankController::class, 'destroy'])->name("destroy");

Route::get('/{id}', [BankController::class, 'edit'])->name("edit");
