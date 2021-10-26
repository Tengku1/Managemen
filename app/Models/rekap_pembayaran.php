<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekap_pembayaran extends Model
{
    use HasFactory;
    protected $table = "hutang";
    protected $fillable = [
        "no_rekap",
        "no_po",
        "no_faktur_pembelian",
        "jumlah_faktur_pembelian",
        "no_kasbon",
        "jumlah_kasbon",
        "kode_penerimaan_barang",
        "jumlah_po",
        "kode_pemasok",
        "nama_pemasok",
        "kode_hutang",
        "nominal",
        "ppn"
    ];
    public $timestamps = false;
}
