<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
    ['id_barang' => 1, 'id_pembeli' => 1, 'jumlah' => 5, 'tanggal' => '2024-04-05'],
    ['id_barang' => 2, 'id_pembeli' => 3, 'jumlah' => 10, 'tanggal' => '2024-05-05'],
    ['id_barang' => 3, 'id_pembeli' => 1, 'jumlah' => 15, 'tanggal' => '2024-07-05'],
    ['id_barang' => 1, 'id_pembeli' => 2, 'jumlah' => 10, 'tanggal' => '2023-04-05'],
    ['id_barang' => 2, 'id_pembeli' => 2, 'jumlah' => 20, 'tanggal' => '2023-05-05'],
    ['id_barang' => 3, 'id_pembeli' => 3, 'jumlah' => 30, 'tanggal' => '2023-07-05'],
];
// masukkan data ke database
DB::table('transaksis')->insert($transaksis);
    }
}
