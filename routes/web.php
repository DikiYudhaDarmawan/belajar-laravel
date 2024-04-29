<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route bassic
Route::get('/about', function () {
    return '<h1>halo</h1>'
        . 'selamat datang di webapp saya <br>'
        . 'Laravel, emang keren.';
}) ;

//perkenalan
Route::get('/biodata', function () {
    return '<h1>BIODATA</h1>'
        . 'Nama : Diki <br>'
        . 'Sekolah : SMK ASSALAAM BANDUNG <br>'
        . 'Jurusan : RPL <br>'
        . 'Kelas : XI RPL 1';
});

Route::get('/animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('/vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetables_page', ['buah' => $fruit]);
});


//route parameter
Route::get('/myself/{name}/{bb}/{tb}', function ($name, $bb, $tb) {
    $bmi = $bb / (($tb / 100) * 2);
    if ($bmi > 30){
        $ket = "Obesitas";
    } elseif ($bmi >25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5){
        $ket = "ideal";
    } elseif ($bmi < 18.5){
        $ket = "kekurangan";
    }


    return "nama: $name <br>" .
        "tb : $bb <br>" .
        "bb : $tb <br>" .
        "bmi : $bmi <br>".
        "keterangan : $ket";
});

Route::get('/myname/{nama?}', function($a = "Abdu"){
    return "my name is $a";
});

Route::get('/testmodel', function () {
    $data = Post::all();
    return $data;
});

Route::get('/testmodelbarang', function () {
    $data = Barang::all();
    return $data;
});
