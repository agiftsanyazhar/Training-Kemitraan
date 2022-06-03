<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public function brand_barang()
    {
        return $this->belongsTo(Kategori_Barang::class,'id_brand','id');
    }
}
