<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase_order extends Model
{
    use HasFactory;
    protected $table = "hutang";
    protected $fillable = [
        "tgl_po",
        "tgl_dibutuhkan",
        "jatuh_tempo",
        "nama_supplier",
        "alamat",
        "nama_barang",
        "volume",
        "harga_satuan",
        "total",
        "discount",
        "ppn",
        "total_harga",
        "validasi"
    ];
    public $timestamps = false;
}
