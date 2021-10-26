<?php

use App\Http\Controllers\PenerimaanBarang;
use Illuminate\Support\Facades\Route;

Route::get('/', [PenerimaanBarang::class, 'index'])->name("get");
Route::post('/', [PenerimaanBarang::class, 'store'])->name("store");
Route::patch('/', [PenerimaanBarang::class, 'update'])->name("update");
Route::delete('/', [PenerimaanBarang::class, 'destroy'])->name("destroy");

Route::get('/{id}', [PenerimaanBarang::class, 'edit'])->name("edit");
