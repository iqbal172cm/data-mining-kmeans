<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Penjualan;
use Faker\Generator as Faker;

$factory->define(Penjualan::class, function (Faker $faker) {
    return [
        'uuid'=>$faker->uuid,
        'nm_produk'=>$faker->name,
        'olahan'=>$faker->name,
        'penjualan'=>$faker->randomDigit,
        'tgl_jual'=>$faker->date('Y-m-d')
    ];
});
