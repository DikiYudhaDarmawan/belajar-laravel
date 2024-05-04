<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $pembelis = [
    ['nama_pembeli' => 'udin', 'jenis_kelamin' => 'pria'],
    ['nama_pembeli' => 'munaroh', 'jenis_kelamin' => 'wanita'],
    ['nama_pembeli' => 'ucok', 'jenis_kelamin' => 'pria'],
];
// masukkan data ke database
DB::table('pembelis')->insert($pembelis);

    }
}
