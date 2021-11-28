<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = [
        'nama',
        'username',
        'password',
        'pekerjaan',
        'alamat',
        'gambar',
    ];
    protected $primaryKey = 'id';
}
