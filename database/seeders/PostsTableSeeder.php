<?php

namespace Database\Seeders;

//use illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'Tips Cepat Pintar', 'content' => 'lorem ipsum'],
            ['title' => 'Haruskah Berfikir positif?', 'content' => 'lorem ipsum'],
            ['title' => 'Membangun Visi Misi sukses', 'content' => 'lorem ipsum'],
        ];
// masukkan data ke database
        DB::table('posts')->insert($posts);
    }
}
