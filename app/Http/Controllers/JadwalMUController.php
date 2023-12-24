<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use App\Models\JadwalMU;
use App\Models\StokDarah;
use Illuminate\Http\Request;

class JadwalMUController extends Controller
{
    public function index()
    {
        if(auth()->user()->isAdmin) {
            $query = JadwalMU::orderBy('tanggal', 'DESC')->orderBy('jam_mulai', 'ASC');

            if(request('search')) {
                $query = JadwalMU::where('tempat', 'like', '%' . request('search') . '%')
                                    ->orWhere('alamat', 'like', '%' . request('search') . '%')
                                    ->orWhere('kabkot', 'like', '%' . request('search') . '%')
                                    ->orWhere('peruntukan', 'like', '%' . request('search') . '%');

                $query->orderBy('tanggal', 'DESC')->orderBy('jam_mulai', 'ASC');
            }
            
        } else {
            $query = JadwalMU::where('alamat_id', auth()->user()->alamatudd_id);
            $query->orderBy('tanggal', 'DESC')->orderBy('jam_mulai', 'ASC');

            if(request('search')) {
                $query = JadwalMU::where('tempat', 'like', '%' . request('search') . '%')
                                    ->orWhere('alamat', 'like', '%' . request('search') . '%')
                                    ->orWhere('kabkot', 'like', '%' . request('search') . '%')
                                    ->orWhere('peruntukan', 'like', '%' . request('search') . '%');

                $query->where('alamat_id', auth()->user()->alamatudd_id);
                $query->orderBy('tanggal', 'DESC')->orderBy('jam_mulai', 'ASC');
            }
        }

        $dataJadwalMU = $query->paginate(5)->appends(['search' => request('search')]);

        return view('v_dashboard.jadwalmu.index', [
            'dataJadwalMU' => $dataJadwalMU,
        ]);
    }

    public function create()
    {
        return view('v_dashboard.jadwalmu.create', [
            'dataAlamatUDD' => AlamatUDD::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'alamat_id' => 'required',
            'tempat' => 'required',
            'alamat'  => 'required',
            'kabkot' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'tanggal' => 'required',
            'peruntukan' => 'required'
        ]);

        // $validateData['alamat_id'] = auth()->user()->alamatudd_id;

        JadwalMU::create($validateData);

        return redirect('/dashboard/jadwalmu')->with('success', 'Data berhasil ditambahkan!');
    }

    public function show(JadwalMU $jadwalMU)
    {
        //
    }

    public function edit(JadwalMU $jadwalMU, $id)
    {
        $jadwalMU = JadwalMU::find($id);

        return view('v_dashboard.jadwalmu.edit', [
            'dataJadwalMU' => $jadwalMU
        ]);
    }

    public function update(Request $request, JadwalMU $jadwalMU, $id)
    {
        $jadwalMU = JadwalMU::find($id);

        $validateData = $request->validate([
            'tempat' => 'required',
            'alamat'  => 'required',
            'kabkot' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'tanggal' => 'required',
            'peruntukan' => 'required'
        ]);

        $validateData['alamat_id'] = auth()->user()->alamatudd_id;

        JadwalMU::where('id', $jadwalMU->id)->update($validateData);

        return redirect('/dashboard/jadwalmu')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(JadwalMU $jadwalMU, $id)
    {
        $jadwalMU = JadwalMU::find($id);
        JadwalMU::destroy($jadwalMU->id);

        return redirect('/dashboard/jadwalmu')->with('success', 'Data berhasil dihapus!');
    }
}
