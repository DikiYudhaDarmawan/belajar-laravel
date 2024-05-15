<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use illuminate\Http\Request;
class ProdukController extends Controller
{
    public function nampilProduk()
    {
        $produks = Produk::all();
        return view('produks/index', compact('produks'));

    }
    
       public function show($id){
        $produks = Produk::findOrFail($id);
        return view('produks.show', compact('produks'));
    }

}
