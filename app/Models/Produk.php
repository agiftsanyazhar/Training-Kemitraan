<?php

namespace App\Models;

use App\Policies\KategoriPolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand', 'id');
    }

    public function stok()
    {
        return $this->hasMany(Stok::class, 'id_produk', 'id');
    }

    public function kategori_barang()
    {
        return $this->belongsTo(Kategori_Barang::class, 'id_produk', 'id');
    }
}
