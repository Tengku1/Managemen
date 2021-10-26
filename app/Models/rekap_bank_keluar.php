<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rekap_bank_keluar extends Model
{
    use HasFactory;
    protected $table = "hutang";
    protected $fillable = [
        "tgl_bank_keluar",
        "no_cek",
        "no_bg",
        "uraian",
        "debet",
        "kredit",
        "saldo",
        "no_rekap",
        "no_faktur",
        "nominal",
        "kode_ttp",
        "validasi"
    ];
    public $timestamps = false;
}
