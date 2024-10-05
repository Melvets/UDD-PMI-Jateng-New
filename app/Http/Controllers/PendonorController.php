<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use App\Models\Pendonor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        // Ubah input menjadi title case
        $request->merge([
            'nama' => Str::title($request->input('nama')),
            'agama' => Str::title($request->input('agama')),
            'pekerjaan' => Str::title($request->input('pekerjaan')),
        ]);

        $validateData = $request->validate([
            'no_piagam' => 'required',
            'nama' => 'required|string',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string|max:20',
            'jk' => 'required',
            'no_ktp' => 'required|digits:16',
            'no_telepon' => 'required|max:15|min:10',
            'pekerjaan' => 'required',
            'golda' => 'required',
            'jumlah_donasi' => 'required|numeric',
            'donor_pertama' => 'required|date',
            'piagam_ke' => 'required|numeric',
            'tanggal_piagam' => 'required|date',
        ]);

        // dd(auth()->user()->id);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['alamatudd_id'] = auth()->user()->alamatudd_id;

        Pendonor::create($validateData);

        return redirect('/dashboard/pendonor')->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $dataPendonor = Pendonor::findOrFail($id);
        return response()->json($dataPendonor);
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
        // Ubah input menjadi title case
        $request->merge([
            'nama' => Str::title($request->input('nama')),
            'agama' => Str::title($request->input('agama')),
            'pekerjaan' => Str::title($request->input('pekerjaan')),
        ]);

        $validateData = $request->validate([
            'no_piagam' => 'required',
            'nama' => 'required|string',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string|max:20',
            'jk' => 'required',
            'no_ktp' => 'required|digits:16',
            'no_telepon' => 'required|max:15|min:10',
            'pekerjaan' => 'required',
            'golda' => 'required',
            'jumlah_donasi' => 'required|numeric',
            'donor_pertama' => 'required|date',
            'piagam_ke' => 'required|numeric',
            'tanggal_piagam' => 'required|date',
        ]);

        Pendonor::where('id', $pendonor->id)->update($validateData);
        return redirect('/dashboard/pendonor')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(Pendonor $pendonor)
    {
        Pendonor::destroy($pendonor->id);

        return redirect('/dashboard/pendonor')->with('success', 'Data berhasil dihapus!');
    }
}
