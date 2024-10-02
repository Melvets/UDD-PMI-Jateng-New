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
        // dd($request->all());

        $validateData = $request->validate([
            'no_piagam' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jk' => 'required',
            'no_ktp' => 'required',
            'no_telepon' => 'required',
            'pekerjaan' => 'required',
            'golda' => 'required',
            'jumlah_donasi' => 'required',
            'donor_pertama' => 'required',
            'piagam_ke' => 'required',
            'tanggal_piagam' => 'required',
        ]);

        // dd(auth()->user()->id);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['alamatudd_id'] = auth()->user()->alamatudd_id;

        Pendonor::create($validateData);

        return redirect('/dashboard/pendonor')->with('success', 'Data berhasil dibuat!');
    }

    public function show(Pendonor $pendonor)
    {
        //
    }

    public function edit($id)
    {
        $pendonor = Pendonor::find($id);

        return view('v_dashboard.pendonor.edit', [
            'dataPendonor' => $pendonor
        ]);
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
