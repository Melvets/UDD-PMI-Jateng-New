<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use Illuminate\Http\Request;

class AlamatUDDController extends Controller
{
    public function index()
    {
        return view ('v_landing.index', [
            'dataAlamatUDD' => AlamatUDD::all() 
        ]);
    }
}
