<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_status extends Model
{
    protected $fillable = [
        'tanggal',
        'kode_sapi',
        'status_id'
    ];
    use HasFactory;
    protected $table = 'detail_status';
}
