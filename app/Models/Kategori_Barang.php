<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Barang extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function barang()
    {
        return $this->hasMany(barang::class,'id_kategori','id');
    }
}
