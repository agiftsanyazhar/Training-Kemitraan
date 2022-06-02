<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class,'id_user','id');
    }

    public function barang()
    {
        return $this->belongsTo(barang::class,'id_barang','id');
    }

    public function detail_transaksi()
    {
        return $this->hasOne(Detail_transaksi::class,'id_keranjang','id');
    }
}
