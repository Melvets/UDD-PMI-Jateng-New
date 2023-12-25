@extends('v_dashboard.layouts.main')

@section('container')
    {{-- Page Header --}}
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">

                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        <a href="/dashboard" class="text-secondary">/dashboard</a><a href="/dashboard/stokdarah" class="text-secondary">/stokdarah</a>/edit
                    </div>
                    <h2 class="page-title">
                        Edit Data Stok Darah {{ auth()->user()->AlamatUDD->udd_kabkot }}
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

                            <form action="/dashboard/stokdarah/{{ $dataStokDarah->id }}" method="POST" class="card">

                                @csrf
                                @method('put')

                                <div class="card-header">
                                    <h3 class="card-title">Form Create Data</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row row-cards">

                                        <div class="col-md-12">
                                            <div class="mb-1">
                                                <label for="alamat_id" class="form-label required">Pilih UDD
                                                    Kabupaten/Kota</label>
                                                <select disabled class="form-select" name="alamat_id" id="alamat_id">
                                                    @foreach ($dataAlamatUDD as $data)
                                                        @if (old('alamat_id', $dataStokDarah->alamat_id) == $data->id)
                                                            <option value="{{ $data->id }}" selected>
                                                                {{ $data->udd_kabkot }}</option>
                                                        @else
                                                            <option value="{{ $data->id }}">{{ $data->udd_kabkot }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-1">
                                                <label for="golda_a" class="form-label required">Golda A</label>
                                                <input type="number" name="golda_a" id="golda_a"
                                                    class="form-control @error('golda_a') is-invalid @enderror"
                                                    placeholder="Wajib diisi ..." required
                                                    value="{{ $dataStokDarah->golda_a }}">
                                                @error('golda_a')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-1">
                                                <label for="golda_b" class="form-label required">Golda B</label>
                                                <input type="number" name="golda_b" id="golda_b"
                                                    class="form-control @error('golda_b') is-invalid @enderror"
                                                    placeholder="Wajib diisi ..." required
                                                    value="{{ old('golda_b', $dataStokDarah->golda_b) }}">
                                                @error('golda_b')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-1">
                                                <label for="golda_ab" class="form-label required">Golda AB</label>
                                                <input type="number" name="golda_ab" id="golda_ab"
                                                    class="form-control @error('golda_ab') is-invalid @enderror"
                                                    placeholder="Wajib diisi ..." required
                                                    value="{{ old('golda_ab', $dataStokDarah->golda_ab) }}">
                                                @error('golda_ab')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="mb-1">
                                                <label for="golda_o" class="form-label required">Golda O</label>
                                                <input type="number" name="golda_o" id="golda_o"
                                                    class="form-control @error('golda_o') is-invalid @enderror"
                                                    placeholder="Wajib diisi ..." required
                                                    value="{{ old('golda_o', $dataStokDarah->golda_o) }}">
                                                @error('golda_o')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <a href="/dashboard/stokdarah" class="btn btn-outline-danger mx-2">Back</a>
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
