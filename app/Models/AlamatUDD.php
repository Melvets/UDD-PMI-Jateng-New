<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatUDD extends Model
{
    use HasFactory;

    protected $table = "alamatudd";
    protected $guarded = ['id_alamatudd'];

}
