<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailScreening extends Model
{
    use HasFactory;

    protected $table = 'detail_screening';
    protected $primaryKey = 'id_detail';

    protected $fillable = [
        'id_screening',
        'id_item',
        'status',
        'keterangan',
        'kesimpulan',
        'catatan',
    ];

    public function screening()
    {
        return $this->belongsTo(ScreeningKaryawan::class, 'id_screening', 'id_screening');
    }

    public function item()
    {
        return $this->belongsTo(ItemScreening::class, 'id_item', 'id_item');
    }
}
