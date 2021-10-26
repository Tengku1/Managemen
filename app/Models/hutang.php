<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hutang extends Model
{
    use HasFactory;
    protected $table = "hutang";
    protected $fillable = [
        "no_po",
        "no_faktur_pembelian",
        "jumlah_faktur_pembelian",
        "kode_penerimaan_barang",
        "jumlah_po",
        "kode_pemasok",
        "nama_pemasok",
        "nominal",
        "ppn"
    ];
    public $timestamps = false;
}
