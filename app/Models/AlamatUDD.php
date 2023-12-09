<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AlamatUDD extends Model
{
    use HasFactory;

    protected $table = "alamatudd";
    protected $guarded = ['id'];

    public function User() : HasOne
    {
        return $this->hasOne(User::class, 'alamat_id', 'id');
    }

    public function StokDarah() : HasMany
    {
        return $this->hasMany(StokDarah::class, 'alamat_id', 'id');
    }
}
