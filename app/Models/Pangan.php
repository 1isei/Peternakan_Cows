<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pangan extends Model
{
    protected $fillable = [
        'kode_pangan',
        'jenis_pakan',
        'stock',
    ];
    use HasFactory;
    protected $table = 'pangan';

    public function TransaksiPemasukan()
    {
        return $this->hasMany(TransaksiPemasukan::class);
    }

    public function TransaksiPengeluaran()
    {
        return $this->hasMany(TransaksiPengeluaran::class);
    }
}
