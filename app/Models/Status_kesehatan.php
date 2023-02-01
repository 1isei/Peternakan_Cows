<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status_kesehatan extends Model
{
    protected $fillable = [
        'status',
        'jumlah_sapi'
    ];
    use HasFactory;
    protected $table = 'detail_status';
}
