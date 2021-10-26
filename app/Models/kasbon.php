<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kasbon extends Model
{
    use HasFactory;
    protected $table = "kasbon";
    protected $fillable = [
        "nama_penerima",
        "jabatan",
        "nominal",
        "keperluan",
        "tgl_kasbon",
        "validasi"
    ];
    public $timestamps = false;
}
