<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produk;

class penjualan extends Model
{
    protected $table="penjualan";

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'nm_produk');
    }
}
