<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'kategori_produk';
    protected $fillable = [
        'nama'
    ];
    //menerima relasi one to many dengan table produk
    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
