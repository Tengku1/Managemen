<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faktur extends Model
{
    use HasFactory;
    protected $table = "faktur";
    protected $fillable = [
        "nama_pemasok",
        "alamat_pemasok",
        "kode_pemasok",
        "nama_barang",
        "harga_satuan",
        "no_po",
        "tgl_faktur",
        "total_harga",
        "validasi"
    ];
    public $timestamps = false;
}
