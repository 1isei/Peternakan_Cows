<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detail_status;

class Status_kesehatan extends Model
{
    protected $fillable = [
        'status',
        'jumlah_sapi'
    ];
    use HasFactory;
    protected $table = 'status';

    public function detail()
    {
        return $this->hasMany(Detail_status::class,'status_id');
    }
}
