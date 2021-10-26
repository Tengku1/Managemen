<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPembayaran extends Model
{
    use HasFactory;
    protected $table = "informasi_pembayaran";
    protected $fillable = [
        "no_faktur",
        "nominal",
        "kode_ttp",
        "tgl_pengambilan",
    ];
    public $timestamps = false;
}
