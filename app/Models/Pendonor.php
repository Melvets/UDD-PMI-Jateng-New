<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    use HasFactory;

    protected $table = 'pendonor';
    protected $guarded = ['id'];

    public function AlamatUDD()
    {
        return $this->belongsToMany(AlamatUDD::class, 'alamatudd_id', 'id');
    }

    public function User()
    {
        return $this->belongsToMany(User::class, 'user_id', 'id');
    }
}
