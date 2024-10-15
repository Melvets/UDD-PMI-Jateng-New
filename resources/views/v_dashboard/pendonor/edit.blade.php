@extends('v_dashboard.layouts.main')

@section('container')
    {{-- Page Header --}}
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">

                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        <a href="/dashboard" class="text-secondary">/dashboard</a><a href="/dashboard/pendonor"
                            class="text-secondary">/pendonor</a>/edit
                    </div>
                    <h2 class="page-title">
                        Edit Pendonor
                    </h2>
                </div>

            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">

                <div class="col-lg-12">
                    <div class="row row-cards">
                        <div class="col-12">

                            <form action="/dashboard/pendonor/{{ $dataPendonor->id }}" method="POST" class="card">

                                @csrf
                                @method('put')

                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Data</h3>
                                </div>

                                <div class="card-body px-5">

                                    {{-- User Deskription Start --}}

                                    <div class="mb-3 row">
                                        <label for="user_id" class="col-3 col-form-label">Username</label>
                                        <div class="col">
                                            <input disabled type="text" name="user_id" id="user_id"
                                                class="form-control" placeholder="Wajib diisi ..."
                                                value="{{ $dataPendonor->User->first_name }} {{ $dataPendonor->User->last_name }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="alamatudd_id" class="col-3 col-form-label">UDD
                                            Kabupaten/Kota</label>
                                        <div class="col">
                                            <input disabled type="text" name="alamatudd_id" id="alamatudd_id"
                                                class="form-control" placeholder="Wajib diisi ..."
                                                value="{{ $dataPendonor->AlamatUDD->udd_kabkot }}">
                                        </div>
                                    </div>

                                    {{-- User Deskription End --}}

                                    {{-- Nomor Piagam --}}
                                    <div class="mb-3 row">
                                        <label for="no_piagam" class="col-3 col-form-label required">Nomor Piagam</label>
                                        <div class="col">
                                            <input type="text" name="no_piagam" id="no_piagam"
                                                class="form-control @error('no_piagam') is-invalid @enderror"
                                                placeholder="Wajib diisi ..." required value="{{ old('no_piagam', $dataPendonor->no_piagam) }}">
                                            @error('no_piagam')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Nama --}}
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-3 col-form-label required">Nama</label>
                                        <div class="col">
                                            <input type="text" name="nama" id="nama"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                placeholder="Wajib diisi ..." required value="{{ old('nama', $dataPendonor->nama) }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Alamat --}}
                                    <div class="mb-3 row">
                                        <label for="alamat" class="col-3 col-form-label required">Alamat</label>
                                        <div class="col">
                                            <input type="text" name="alamat" id="alamat"
                                                class="form-control @error('alamat') is-invalid @enderror"
                                                placeholder="Wajib diisi ..." required value="{{ old('alamat', $dataPendonor->alamat) }}">
                                            @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Tempat Lahir --}}
                                    <div class="mb-3 row">
                                        <label for="tempat_lahir" class="col-3 col-form-label required">Tempat Lahir</label>
                                        <div class="col">
                                            <select class="form-select @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir">
                                                <option value="">--Pilih Kabupaten/Kota--</option>
                                                @if (old('tempat_lahir', $dataPendonor->tempat_lahir))
                                                    <option selected value="{{ $dataPendonor->tempat_lahir }}">{{ $dataPendonor->tempat_lahir }}</option>
                                                @endif
                                                    <option value="Kabupaten Banjarnegara">Kabupaten Banjarnegara</option>
                                                    <option value="Kabupaten Banyumas ">Kabupaten Banyumas </option>
                                                    <option value="Kabupaten Batang">Kabupaten Batang</option>
                                                    <option value="Kabupaten Blora">Kabupaten Blora</option>
                                                    <option value="Kabupaten Boyolali">Kabupaten Boyolali</option>
                                                    <option value="Kabupaten Brebes">Kabupaten Brebes</option>
                                                    <option value="Kabupaten Cilacap">Kabupaten Cilacap</option>
                                                    <option value="Kabupaten Demak">Kabupaten Demak</option>
                                                    <option value="Kabupaten Grobogan">Kabupaten Grobogan</option>
                                                    <option value="Kabupaten Jepara">Kabupaten Jepara</option>
                                                    <option value="Kabupaten Karanganyar">Kabupaten Karanganyar</option>
                                                    <option value="Kabupaten Kebumen">Kabupaten Kebumen</option>
                                                    <option value="Kabupaten Kendal">Kabupaten Kendal</option>
                                                    <option value="Kabupaten Klaten">Kabupaten Klaten</option>
                                                    <option value="Kabupaten Kudus">Kabupaten Kudus</option>
                                                    <option value="Kabupaten Magelang">Kabupaten Magelang</option>
                                                    <option value="Kabupaten Pati">Kabupaten Pati</option>
                                                    <option value="Kabupaten Pekalongan">Kabupaten Pekalongan</option>
                                                    <option value="Kabupaten Pemalang">Kabupaten Pemalang</option>
                                                    <option value="Kabupaten Purbalingga">Kabupaten Purbalingga</option>
                                                    <option value="Kabupaten Purworejo">Kabupaten Purworejo</option>
                                                    <option value="Kabupaten Rembang">Kabupaten Rembang</option>
                                                    <option value="Kabupaten Semarang">Kabupaten Semarang</option>
                                                    <option value="Kabupaten Sragen">Kabupaten Sragen</option>
                                                    <option value="Kabupaten Sukoharjo">Kabupaten Sukoharjo</option>
                                                    <option value="Kabupaten Tegal">Kabupaten Tegal</option>
                                                    <option value="Kabupaten Temanggung">Kabupaten Temanggung</option>
                                                    <option value="Kabupaten Wonogiri">Kabupaten Wonogiri</option>
                                                    <option value="Kabupaten Wonosobo">Kabupaten Wonosobo</option>
                                                    <option value="Kota Magelang">Kota Magelang</option>
                                                    <option value="Kota Pekalongan">Kota Pekalongan</option>
                                                    <option value="Kota Salatiga">Kota Salatiga</option>
                                                    <option value="Kota Semarang">Kota Semarang</option>
                                                    <option value="Kota Surakarta">Kota Surakarta</option>
                                                    <option value="Kota Tegal">Kota Tegal</option>
                                            </select>
                                            @error('tempat_lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Tanggal Lahir --}}
                                    <div class="mb-3 row">
                                        <label for="tanggal_lahir" class="col-3 col-form-label required">Tanggal Lahir</label>
                                        <div class="col">
                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                                class="form-control @error('tanggal_lahir') is-invalid @enderror" required
                                                value="{{ old('tanggal_lahir', $dataPendonor->tanggal_lahir) }}">
                                            @error('tanggal_lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Agama --}}
                                    <div class="mb-3 row">
                                        <label for="agama" class="col-3 col-form-label required">Agama</label>
                                        <div class="col">
                                            <select class="form-select @error('agama') is-invalid @enderror" id="agama" name="agama">
                                                <option value="">--Pilih Golongan Darah--</option>
                                                @if (old('agama', $dataPendonor->agama))
                                                    <option selected value="{{ $dataPendonor->agama }}">{{ $dataPendonor->agama }}</option>
                                                @endif
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Khonghucu">Khonghucu</option>
                                            </select>
                                            @error('agama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Jenis Kelamin --}}
                                    <div class="mb-3 row">
                                        <label for="jk" class="col-3 col-form-label required">Jenis Kelamin</label>
                                        <div class="col">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jk" @if ($dataPendonor->jk == "Laki-Laki") checked @endif 
                                                    value="Laki-Laki">
                                                <span class="form-check-label">Laki-Laki</span>
                                            </label>

                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jk"
                                                    value="Perempuan" @if ($dataPendonor->jk == "Perempuan") checked @endif >
                                                <span class="form-check-label">Perempuan</span>
                                            </label>
                                        </div>
                                    </div>

                                    {{-- Nomor KTP --}}
                                    <div class="mb-3 row">
                                        <label for="no_ktp" class="col-3 col-form-label required">Nomor KTP</label>
                                        <div class="col">
                                            <input type="text" name="no_ktp" id="no_ktp"
                                                class="form-control @error('no_ktp') is-invalid @enderror"
                                                placeholder="Wajib diisi ..." required value="{{ old('no_ktp', $dataPendonor->no_ktp) }}">
                                            @error('no_ktp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Nomor Telepon --}}
                                    <div class="mb-3 row">
                                        <label for="no_telepon" class="col-3 col-form-label required">Nomor Telepon</label>
                                        <div class="col">
                                            <input type="text" name="no_telepon" id="no_telepon"
                                                class="form-control @error('no_telepon') is-invalid @enderror"
                                                placeholder="Wajib diisi ..." required value="{{ old('no_telepon', $dataPendonor->no_telepon) }}">
                                            @error('no_telepon')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Pekerjaann --}}
                                    <div class="mb-3 row">
                                        <label for="pekerjaan" class="col-3 col-form-label required">Pekerjaan</label>
                                        <div class="col">
                                            <input type="text" name="pekerjaan" id="pekerjaan"
                                                class="form-control @error('pekerjaan') is-invalid @enderror"
                                                placeholder="Wajib diisi ..." required value="{{ old('pekerjaan', $dataPendonor->pekerjaan) }}">
                                            @error('pekerjaan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Golda --}}
                                    <div class="mb-3 row">
                                        <label for="golda" class="col-3 col-form-label required">Golongan Darah</label>
                                        <div class="col">
                                            <select class="form-select @error('golda') is-invalid @enderror" id="golda" name="golda">
                                                <option value="">--Pilih Golongan Darah--</option>
                                                @if (old('golda', $dataPendonor->golda))
                                                    <option selected value="{{ $dataPendonor->golda }}">{{ $dataPendonor->golda }}</option>
                                                @endif
                                                    <option value="A+">A+</option>
                                                    <option value="B+">B+</option>
                                                    <option value="O+">O+</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB-">AB-</option>
                                            </select>
                                            @error('golda')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Jumlah Donasi --}}
                                    <div class="mb-3 row">
                                        <label for="jumlah_donasi" class="col-3 col-form-label required">Jumlah Donasi</label>
                                        <div class="col">
                                            <input type="number" name="jumlah_donasi" id="jumlah_donasi"
                                                class="form-control @error('jumlah_donasi') is-invalid @enderror"
                                                placeholder="Wajib diisi ..." required value="{{ old('jumlah_donasi', $dataPendonor->jumlah_donasi) }}">
                                            @error('jumlah_donasi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Donor Pertama --}}
                                    <div class="mb-3 row">
                                        <label for="donor_pertama" class="col-3 col-form-label required">Donor Pertama</label>
                                        <div class="col">
                                            <input type="date" name="donor_pertama" id="donor_pertama"
                                                class="form-control @error('donor_pertama') is-invalid @enderror" required
                                                value="{{ old('donor_pertama', $dataPendonor->donor_pertama) }}">
                                            @error('donor_pertama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>       
                                    
                                    {{-- Piagam Ke- --}}
                                    <div class="mb-3 row">
                                        <label for="piagam_ke" class="col-3 col-form-label required">Piagam Ke-</label>
                                        <div class="col">
                                            <input type="number" name="piagam_ke" id="piagam_ke"
                                                class="form-control @error('piagam_ke') is-invalid @enderror"
                                                placeholder="Wajib diisi ..." required value="{{ old('piagam_ke', $dataPendonor->piagam_ke) }}">
                                            @error('piagam_ke')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>       
                                    
                                    {{-- Tanggal Piagam --}}
                                    <div class="mb-3 row">
                                        <label for="tanggal_piagam" class="col-3 col-form-label required">Tanggal Piagam</label>
                                        <div class="col">
                                            <input type="date" name="tanggal_piagam" id="tanggal_piagam"
                                                class="form-control @error('tanggal_piagam') is-invalid @enderror" required
                                                value="{{ old('tanggal_piagam', $dataPendonor->tanggal_piagam) }}">
                                            @error('tanggal_piagam')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>                                  

                                </div>

                                <div class="card-footer text-end">
                                    <a href="/dashboard/pendonor" class="btn btn-outline-danger mx-2">Back</a>
                                    <button type="submit" class="btn btn-danger">Simpan</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection