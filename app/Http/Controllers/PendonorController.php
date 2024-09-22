<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use App\Models\Pendonor;
use App\Models\User;
use Illuminate\Http\Request;

class PendonorController extends Controller
{
    public function index()
    {
        $query = Pendonor::orderBy('updated_at', 'DESC');

        if(!auth()->user()->isAdmin) {
            $query->where('alamatudd_id', auth()->user()->alamatudd_id);
        }

        $dataPendonor = $query->paginate(5);

        return view('v_dashboard.pendonor.index', [
            'dataPendonor' => $dataPendonor,
        ]);
    }

    public function create()
    {
        return view('v_dashboard.pendonor.create', [
            'dataUsers' => User::all(),
            'dataAlamatUDD' => AlamatUDD::all(),
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Pendonor $pendonor)
    {
        //
    }

    public function edit(Pendonor $pendonor)
    {
        //
    }

    public function update(Request $request, Pendonor $pendonor)
    {
        //
    }

    public function destroy(Pendonor $pendonor)
    {
        //
    }
}
