<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemScreening extends Model
{
    use HasFactory;

    protected $table = 'item_screening';
    protected $primaryKey = 'id_item';

    protected $fillable = [
        'nama_item',
    ];

    public function detailScreenings()
    {
        return $this->hasMany(DetailScreening::class, 'id_item', 'id_item');
    }
}
