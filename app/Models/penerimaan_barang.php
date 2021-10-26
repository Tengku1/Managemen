<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penerimaan_barang extends Model
{
    use HasFactory;
    protected $table = "penerimaan_barang";
    protected $fillable = [
        "divisi",
        "nama_pemasok",
        "no_po",
        "nama_barang",
        "volume",
        "satuan",
        "keterangan",
        "no_penerimaan",
        "tgl_penerimaan",
        "validasi",
    ];
    public $timestamps = false;
}
