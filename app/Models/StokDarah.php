<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StokDarah extends Model
{
    use HasFactory;

    protected $table = "stokdarah";
    protected $guarded = ['id'];

    public function AlamatUDD() : BelongsTo
    {
        return $this->belongsTo(AlamatUDD::class, 'alamat_id', 'id');
    }
}
