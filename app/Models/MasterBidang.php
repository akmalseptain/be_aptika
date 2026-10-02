<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterBidang extends Model
{
    use HasFactory;

    protected $table = 'bidang';
    protected $primaryKey = 'id_bidang';

    protected $fillable = [
        'nama_bidang',
    ];

    public function screenings()
    {
        return $this->hasMany(ScreeningKaryawan::class, 'id_bidang', 'id_bidang');
    }
}
