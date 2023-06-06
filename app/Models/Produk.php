<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    //panggil table produk 
    protected $table = 'produk';
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id'
    ];
    //relasi one To Many ke table kategori produk
    public function kategoriProduk(){
        return $this->belongsTo(kategoriProduk::class);
    }
}
