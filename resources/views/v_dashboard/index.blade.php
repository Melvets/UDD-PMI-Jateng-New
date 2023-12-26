@extends('v_dashboard.layouts.main')

@section('container')

    {{-- Page Header --}}
    {{-- <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">

                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        <a href="/dashboard" class="text-secondary">/dashboard</a>
                    </div>
                    <h2 class="page-title">
                        Home
                    </h2>
                </div>

            </div>
        </div>
    </div> --}}

    <!-- Page body -->

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">

                <div class="col-12">
                    <div class="card">
                        <div class="d-flex card-body align-items-center" style="justify-content: space-between">
                            <div class="">
                                <p class="fw-bold mb-0" style="font-size: 1.5em; line-height: 1.3em">Selamat {{ $waktu }}, <span style="color: #e60000; font-weight: bold"> <br> Camela Desvita Putri</span></p>
                            </div>
                            <div class="">
                                <a href="" class="btn rounded-pill text-white px-3 py-2" style="background-color: #cc0000">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="">
                                <div class="card-title mb-1" style="font-weight: bold">
                                    Detail Unit Donor Darah
                                </div>
                                <div class="ps-2 fw-bold mb-2" style="border-left: #e60000 solid 2px">
                                  <p class="text-secondary mb-0">UDD PMI KOTA SEMARANG</p>
                                    <div class="" style="font-size: 0.8em">
                                        <p class="mb-0">Jl MGR Soegijopranoto SJ No. 31 dan 35</p>
                                        <p class="mb-0">024 - 3515050</p>
                                        <p class="mb-0">uddpmismg@yahoo.com</p>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="/dashboard/alamatudd/smg/edit"
                                        class="btn btn-default text-green btn-md shadow rounded-3 p-2"
                                        title="update"><i class="fas fa-pen"></i><span class="ms-2" style="font-size: 0.8em">Edit</span></a>
                                </div>
                            </div>

                        </div>
                    </div>



                </div> --}}

                {{-- Stok Darah --}}
                <div class="col-12">
                    <div class="row row-cards">

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="">
                                                <img src="/img/ilustrasi/dd-goldaA.png" width="75" height="75">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="text-uppercase" style="color: gray">
                                                <h5 class="mb-0">Golda A</h5>
                                            </div>
                                            <div class="" style="font-size: 2.5em; font-weight: 700; color: #e60000">
                                                200
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="">
                                                <img src="/img/ilustrasi/dd-goldaB.png" width="75" height="75">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="text-uppercase" style="color: gray">
                                                <h5 class="mb-0">Golda B</h5>
                                            </div>
                                            <div class="" style="font-size: 2.5em; font-weight: 700; color: #e60000">
                                                200
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="">
                                                <img src="/img/ilustrasi/dd-goldaAB.png" width="75" height="75">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="text-uppercase" style="color: gray">
                                                <h5 class="mb-0">Golda AB</h5>
                                            </div>
                                            <div class="" style="font-size: 2.5em; font-weight: 700; color: #e60000">
                                                200
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="">
                                                <img src="/img/ilustrasi/dd-goldaO.png" width="75" height="75">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="text-uppercase" style="color: gray">
                                                <h5 class="mb-0">Golda O</h5>
                                            </div>
                                            <div class="" style="font-size: 2.5em; font-weight: 700; color: #e60000">
                                                200
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
