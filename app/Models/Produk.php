<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'idp',
        'nama_produk',
        'deskripsi',
        'alamat',
        'foto_produk',
        'created_at',
        'updated_at',
    ];
}
