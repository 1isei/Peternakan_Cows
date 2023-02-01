<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pangan extends Model
{
    protected $fillable = [
       'kode_pangan',
       'jenis_pakan',
       ' stock'
    ];
    use HasFactory;
    protected $table = 'pangan';
}
