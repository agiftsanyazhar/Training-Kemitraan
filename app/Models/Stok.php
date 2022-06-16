<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stok extends Model
{
    use HasFactory;

    public function produk()
    {
        return $this->belongsTo(Produk::class,'id_produk', 'id');
    }

    public function gudang()
    {
        return $this->belongsTo(Gudang::class, 'id_gudang', 'id');
    }

    public function hadiah()
    {
        return $this->belongsTo(Hadiah::class, 'id_hadiah', 'id');
    }
}
