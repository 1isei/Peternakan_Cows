<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status_kesehatan;

class Detail_status extends Model
{
    protected $fillable = [
        'tanggal',
        'kode_sapi',
        'status_id'
    ];
    use HasFactory;
    protected $table = 'detail_status';
    public $timestamps = false;

    public function status()
     {
        return $this->belongsTo(Status_kesehatan::class, 'status_id', 'id');
     }
}
