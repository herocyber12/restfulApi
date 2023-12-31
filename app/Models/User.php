<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    
    protected $fillable = [
        'uid',
        'nama',
        'alamat',
        'no_hp',
        'pin',
    ];

}
