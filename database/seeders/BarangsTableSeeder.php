<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
    ['nama' => 'kursi', 'jumlah' => 10],
    ['nama' => 'meja', 'jumlah' => 15],
    ['nama' => 'bunga', 'jumlah' => 14],
];
// masukkan data ke database
DB::table('barangs')->insert($barangs);

    }
}
