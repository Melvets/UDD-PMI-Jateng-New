@extends('v_dashboard.layouts.main')

@section('container')

    <!-- Page pre-title -->
    <div class="page-pretitle">
        <a href="/dashboard" class="text-secondary">/dashboard</a><a href="/dashboard/jadwalmu" class="text-secondary">/jadwalmu</a>/create
        </div>
        <h2 class="page-title">
            Create New Data
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

                <form action="/dashboard/jadwalmu" method="POST" class="card">

                    @csrf

                    <div class="card-header"><h3 class="card-title">Form Create Data</h3></div>
                    <div class="card-body">

                        <div class="row row-cards">

                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label for="alamat_id" class="form-label">UDD Kabupaten/Kota</label>
                                    <input disabled type="text" name="alamat_id" id="alamat_id" class="form-control" placeholder="Wajib diisi ..." value="{{ auth()->user()->AlamatUDD->udd_kabkot }}">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-1">
                                    <label for="tempat" class="form-label required">Tempat</label>
                                    <input type="text" name="tempat" id="tempat" class="form-control @error('tempat') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('tempat') }}">
                                    @error('tempat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label for="alamat" class="form-label required">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('alamat') }}">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="mb-1">
                                    <label for="kabkot" class="form-label required">Kabupaten/Kota</label>
                                    <select class="form-select kabkot" id="kabkot" name="kabkot">
                                        <option selected>--Pilih Kabupaten/Kota--</option>
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
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="jam_mulai" class="form-label required">Jam Mulai</label>
                                    <input type="time" name="jam_mulai" id="jam_mulai" class="form-control @error('jam_mulai') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('jam_mulai') }}">
                                    @error('jam_mulai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-1">
                                    <label for="jam_selesai" class="form-label required">Jam Selesai</label>
                                    <input type="time" name="jam_selesai" id="jam_selesai" class="form-control @error('jam_selesai') is-invalid @enderror" placeholder="Wajib diisi ..." required value="{{ old('jam_selesai') }}">
                                    @error('jam_selesai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-1">
                                    <div class="form-label mb-3 required">Peruntukan</div>
                                    <div>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="peruntukan" checked value="Umum">
                                            <span class="form-check-label">Umum</span>
                                        </label>

                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="peruntukan" value="Internal">
                                            <span class="form-check-label">Internal</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <a href="/dashboard/jadwalmu" class="btn btn-outline-danger mx-2">Back</a>
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>

@endsection