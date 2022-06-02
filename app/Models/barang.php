<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    public function kategori_barang()
    {
        return $this->belongsTo(Kategori_Barang::class,'id_kategori','id');
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class,'id_keranjang','id');
    }
}
