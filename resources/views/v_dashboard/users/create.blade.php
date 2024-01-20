@extends('v_dashboard.layouts.main')

@section('container')

{{-- Page Header --}}
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">

            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    <a href="/dashboard" class="text-secondary">/dashboard</a><a href="/dashboard/users" class="text-secondary">/users</a>/create
                </div>
                <h2 class="page-title">
                    Create new User
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

                        <form action="/dashboard/users" method="POST" class="card">

                            @csrf

                            <div class="card-header">
                                <h3 class="card-title">Form Create Data</h3>
                            </div>
                            <div class="card-body">

                                <div class="row row-cards">

                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="first_name" class="form-label required">Nama Depan</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control"
                                                placeholder="Wajib diisi ..." required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-1">
                                            <label for="last_name" class="form-label">Nama Belakang</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control"
                                                placeholder="Masukkan nama belakang">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control"
                                                placeholder="Masukkan username ...">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-1">
                                            <label for="alamatudd_id" class="form-label required">UDD PMI Kabupaten/Kota</label>
                                            <select class="form-select" id="alamatudd_id" name="alamatudd_id">
                                                <option selected>--Pilih UDD PMI Kabupaten/Kota--</option>
                                                @foreach ($dataAlamatUDD as $data)
                                                    <option value="{{ $data->id }}">{{ $data->udd_kabkot }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-1">
                                            <label for="email" class="form-label required">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Wajib diisi ..." required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="password" class="form-label required">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Masukkan password" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="ulangi_password" class="form-label required">Ulangi Password</label>
                                            <input type="password" name="ulangi_password" class="form-control" id="ulangi_password"
                                                placeholder="Ulangi password" required>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <div class="form-label mb-3 required">Status</div>
                                            <div>
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="isAdmin"
                                                        checked value="0">
                                                    <span class="form-check-label">Tidak ada</span>
                                                </label>

                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="isAdmin"
                                                        value="1">
                                                    <span class="form-check-label">Admin</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-end">
                                <a href="/dashboard/users" class="btn outline-btn-primary mx-2">Back</a>
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: #e60000">Simpan</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
