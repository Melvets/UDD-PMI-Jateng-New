@extends('v_dashboard.layouts.main')

@section('container')

    <!-- Page pre-title -->
    <div class="page-pretitle">
        <a href="/dashboard" class="text-secondary">/dashboard</a><a href="/dashboard/alamatudd" class="text-secondary">/alamatUDD</a>/create
        </div>
        <h2 class="page-title">
        Create Alamat Unit Donor Darah
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

                <form action="/dashboard/alamatudd" method="POST" class="card">

                    @csrf

                    <div class="card-header"><h3 class="card-title">Form Create Data</h3></div>
                    <div class="card-body">

                        <div class="row row-cards">

                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label class="form-label required">Nama UDD Kabupaten/Kota</label>
                                    <input type="text" name="udd_kabkot" class="form-control" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label class="form-label required">Alamat UDD Kabupaten/Kota</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label required">Nomor Telepon</label>
                                    <input type="text" name="telp" class="form-control" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label required">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Wajib diisi ..." required>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <a href="/dashboard/alamatudd" class="btn outline-btn-primary mx-2">Back</a>
                        <button type="submit" class="btn btn-primary" style="background-color: #e60000">Simpan</button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>    

@endsection