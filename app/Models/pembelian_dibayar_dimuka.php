<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian_dibayar_dimuka extends Model
{
    use HasFactory;
    protected $table = "pembelian_dibayar_dimuka";
    protected $fillable = [
        "no_kasbon",
        "tgl_kasbon",
        "nominal",
        "no_faktur_pembelian"
    ];
    public $timestamps = false;
}
