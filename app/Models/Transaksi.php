<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_barang', 'id_pembeli','jumlah','tanggal'];
    public $timestamps = true;

     public function Barangg()
    {
        return $this->belongsTo(Barangg::class, 'id_barang');
    }

     public function Pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'id_pembeli');
    }
   

}
