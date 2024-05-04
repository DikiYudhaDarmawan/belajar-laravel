<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama' => 'Diki', 'jenis_kelamin' => "pria", 'alamat' => 'jl cibaduyut lama', 'agama' => 'islam', 'telepon' => 62891, 'email' => 'diki@gmail.com'],
            ['nama' => 'Ali', 'jenis_kelamin' => "pria", 'alamat' => 'BMI', 'agama' => 'islam', 'telepon' => 62891, 'email' => 'ali@gmail.com'],
            ['nama' => 'Abdu', 'jenis_kelamin' => "pria", 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => 62894, 'email' => 'abu@gmail.com'],
            ['nama' => 'Kiara', 'jenis_kelamin' => "wanita", 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => 62891, 'email' => 'kiara@gmail.com'],
            ['nama' => 'Alvin', 'jenis_kelamin' => "pria", 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => 62841, 'email' => 'alvin@gmail.com'],
            ['nama' => 'Satria', 'jenis_kelamin' => "pria", 'alamat' => 'katapang', 'agama' => 'islam', 'telepon' => 62891, 'email' => 'satria@gmail.com'],
            ['nama' => 'Ghazwan', 'jenis_kelamin' => "pria", 'alamat' => 'caringin', 'agama' => 'islam', 'telepon' => 62891, 'email' => 'ghazwan@gmail.com'],
            ['nama' => 'Zahira', 'jenis_kelamin' => "wanita", 'alamat' => 'jl cibaduyut raya', 'agama' => 'islam', 'telepon' => 62891, 'email' => 'zahira@gmail.com'],
            ['nama' => 'Nazwa', 'jenis_kelamin' => "wanita", 'alamat' => 'bojong suren', 'agama' => 'islam', 'telepon' => 62891, 'email' => 'nazwa@gmail.com'],
            ['nama' => 'Rasya', 'jenis_kelamin' => "pria", 'alamat' => 'rancamanyar', 'agama' => 'islam', 'telepon' => 62894, 'email' => 'rasya@gmail.com']
        ];
// masukkan data ke database
DB::table('siswas')->insert($siswas);

    }
}
