<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cows extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_sapi',
        'tgl_lahir',
        'jenis_kelamin',
        'umur',
        'bobot'
    ];
    protected $table = 'cows';
}
