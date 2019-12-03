<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produk;

class Penyetokan extends Model
{
    protected $table="penyetokan";

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'nm_produk');
    }
}
