<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanda_terima_penagihan extends Model
{
    use HasFactory;
    protected $table = "tanda_terima_penagihan";
    protected $fillable = [
        "kode_ttp",
        "no_faktur",
        "nominal",
        "nama_pemasok",
        "tgl_pengambilan"
    ];
    public $timestamps = false;
}
