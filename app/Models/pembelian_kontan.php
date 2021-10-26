<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian_kontan extends Model
{
    use HasFactory;
    protected $table = "pembelian_kontan";
    protected $fillable = [
        "no_kasbon",
        "jumlah_kasbon",
        "tgl_kasbon",
        "kode_penerimaan_barang",
        "no_faktur_pembelian",
        "kode_pemasok",
        "nama_pemasok"
    ];
    public $timestamps = false;
}
