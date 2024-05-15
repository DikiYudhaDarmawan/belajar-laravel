<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Models\Barang;
use App\Models\Merek;
use App\Models\Pengguna;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Siswa;
use App\Models\Telepon;
use App\Models\Transaksi;

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
});

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
    if ($bmi > 30) {
        $ket = "Obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan";
    }

    return "nama: $name <br>" .
        "tb : $bb <br>" .
        "bb : $tb <br>" .
        "bmi : $bmi <br>" .
        "keterangan : $ket";
});

Route::get('/myname/{nama?}', function ($a = "Abdu") {
    return "my name is $a";
});

Route::get('/testmodel', function () {
    $post = Post::all();
    return view('tampil_post', compact('post'));
});

Route::get('/testmodelbarang', function () {
    $barang = Barang::all();
    return view('tampil_barang', compact('barang'));
});

Route::get('/testmodelsiswa', function () {
    $siswa = Siswa::all();
    // $siswa = Siswa::find(5);
    //$siswa = Siswa::where('jenis_kelamin', 'like', 'pria')->get();
    //   $siswa = new Siswa;
    //   $siswa->nama = "surya";
    //   $siswa->jenis_kelamin = "pria";
    //   $siswa->alamat = "kopo permai";
    //   $siswa->agama = "islam";
    //   $siswa->telepon = 62897;
    //   $siswa->email = "surya@gmail.com";
    //   $siswa->save();
    return view('tampil_siswa', compact('siswa'));

});

Route::get('/testmodelpengguna', function () {
    $pengguna = Pengguna::all();
    return view('tampil_pengguna', compact('pengguna'));
});

Route::get('/telepon', function () {
    $telepons = Telepon::all();
    return view('tampil_telepon', compact('telepons'));
});

Route::get('/merek', function () {
    $mereks = Merek::all();
    return view('tampil_merek', compact('mereks'));
});

Route::get('/produk', function () {
    $produks = Produk::all();
    return view('tampil_produk', compact('produks'));
});

Route::get('/transaksi', function () {
    $transaksis = Transaksi::all();
    return view('tampil_transaksi', compact('transaksis'));
});

Route::get("/post", [PostController::class, 'menampilkan']);
Route::get("/post/{id}", [PostController::class, 'show']);

Route::get("/product", [ProdukController::class, 'nampilProduk']);
Route::get("/product/{id}", [ProdukController::class, 'show']);

Route::get("/merk", [MerekController::class, 'tampilMerek']);
Route::get("/merk/{id}", [MerekController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use Illuminate\Support\Facades\Route;
Route::resource('brand', BrandController::class);
