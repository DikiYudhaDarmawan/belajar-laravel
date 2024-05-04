<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
    ['nama_produk' => 'iphone xr', 'jumlah' => 10,'tanggal_produk' =>'2008-02-21', 'id_merek' => 1],
    ['nama_produk' =>  'redmi note 10s','jumlah' => 20,'tanggal_produk' =>'2005-05-01', 'id_merek' => 2],
    ['nama_produk' =>  'galaxy a55', 'jumlah'=> 30,'tanggal_produk' =>'2010-10-10', 'id_merek' => 3],
    ['nama_produk' =>  'iphone 14','jumlah' => 10,'tanggal_produk' =>'2015-02-21', 'id_merek' => 1],
    ['nama_produk' =>  'mi 10t','jumlah' => 20,'tanggal_produk' =>'2015-05-01', 'id_merek' => 2],
    ['nama_produk' =>  'galaxy s24','jumlah' => 30,'tanggal_produk' =>'2015-10-10', 'id_merek' => 3],
];
// masukkan data ke database
DB::table('produks')->insert($produks);

    }
}
