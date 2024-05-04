<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BaranggsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $baranggs = [
    ['nama_barang' => 'mouse pad', 'harga' => 10000,'stok'=>10],
    ['nama_barang' => 'mouse', 'harga' => 20000,'stok'=>20],
    ['nama_barang' => 'keyboard', 'harga' => 30000,'stok'=>30],
];
// masukkan data ke database
DB::table('baranggs')->insert($baranggs);

    }
}
