<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPengeluaran extends Model
{
    use HasFactory;
    protected $table = 'transaksi_pengeluaran';
    protected $fillable = [
        'tanggal',
        'tipe_pangan',
        'jumlah_pangan'
    ];

    public function pangan()
    {
        return $this->belongsTo(Pangan::class, 'tipe_pangan', 'kode_pangan');
    }
}
