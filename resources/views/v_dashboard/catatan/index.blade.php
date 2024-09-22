@extends('v_dashboard.layouts.main')

@section('container')
    {{-- Page Header --}}
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">

                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        <a href="/dashboard" class="text-secondary">/dashboard</a><a href="/dashboard/catatan"
                            class="text-secondary">/catatan</a>
                    </div>
                    <h2 class="page-title">
                        Catatan {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                    </h2>
                </div>

            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">

            {{-- Table --}}
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title">Catatan</h3>
                    </div>

                    <div class="card-body">
                        <h1>LANDING PAGE</h1>
                        <p>1. Home</p>
                        <p>2. Jadwal MU -> Done</p>
                        <p>3. Stok Darah -> Done</p>
                        <p>4. Alamat UDD -> Done</p>
                        <p>4. Media & Publikasi -> (Belum)</p>
                        <h1>DASHBOARD</h1>
                        <p>1. Home</p>
                        <p>2. Profil --> Belum</p>
                        <p>3. Alamat UDD: CRUD -> Done</p>
                        <p>4. Stok Darah: CRUD -> Done</p>
                        <p>5. Jadwal Mobile Unit: CRUD -> Done</p>
                        <p class="fw-bold">6. Data Pendonor: CRUD -> Index (Belum)</p>
                        <p>7. Media & Publikasi: CRUD -> (Belum)</p>
                        <p>8. (Users): CRUD -> Index (Belum dicek lagi)</p>
                    </div>
                </div>
            </div>
            {{-- End Table --}}

            </div>
        </div>
    </div>
@endsection