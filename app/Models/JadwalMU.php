<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMU extends Model
{
    use HasFactory;

    protected $table = "jadwalmu";
    protected $guarded = ['id'];

    public function AlamatUDD()
    {
        return $this->belongsTo(AlamatUDD::class, 'alamatudd_id', 'id');
    }
}
