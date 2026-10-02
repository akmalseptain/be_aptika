<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScreeningKaryawan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'screening_karyawan';
    protected $primaryKey = 'id_screening';

    protected $fillable = [
        'nama_karyawan',
        'id_jabatan',
        'id_bidang',
        'tahun',
        'id_detail',
        'tanggal_screening',
        'kesimpulan',
        'catatan',
    ];

    protected $casts = [
        'tanggal_screening' => 'date',
        'tahun' => 'integer',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan', 'id_jabatan');
    }

    public function bidang()
    {
        return $this->belongsTo(MasterBidang::class, 'id_bidang', 'id_bidang');
    }

    public function details()
    {
        return $this->hasMany(DetailScreening::class, 'id_screening', 'id_screening')->orderBy('id_item', 'asc');
    }

    public function detailUtama()
    {
        return $this->belongsTo(DetailScreening::class, 'id_detail', 'id_detail');
    }
}
