<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokDarah extends Model
{
    use HasFactory;

    protected $table = "stokdarah";
    protected $guarded = ['id_stokdarah'];

    public function AlamatUDD()
    {
        return $this->belongsTo(AlamatUDD::class, 'alamat_id', 'id_alamatudd');
    }
}
