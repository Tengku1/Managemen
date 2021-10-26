<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPembayaran extends Model
{
    use HasFactory;
    protected $table = "rekap_pembelian";
    protected $fillable = [
        "no_po",
        "jumlah_po",
        "no_faktur",
        "nominal_faktur",
        "no_kasbon",
        "jumlah_kasbon",
        "kode_penerimaan_barang",
        "no_rekap",
        "tgl_rekap",
        "nominal",
        "ppn"
    ];
    public $timestamps = false;
}
