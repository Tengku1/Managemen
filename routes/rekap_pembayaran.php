<?php

use App\Http\Controllers\RekapPembayaran;
use Illuminate\Support\Facades\Route;

Route::get('/', [RekapPembayaran::class, 'index'])->name("get");
Route::post('/', [RekapPembayaran::class, 'store'])->name("store");
Route::patch('/', [RekapPembayaran::class, 'update'])->name("update");
Route::delete('/', [RekapPembayaran::class, 'destroy'])->name("destroy");

Route::get('/{id}', [RekapPembayaran::class, 'edit'])->name("edit");
