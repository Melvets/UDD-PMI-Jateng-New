@extends('v_landing.layouts.main')

@section('container')
    <div class="" style="margin: 0 15%; padding-top: 6.5rem">

        <h2 class="fw-bold fs-2 text-center"> STOK <span style="color: #e60000">DARAH</span> </h2>
        <h6 class="text-center mb-4" style="font-size: 0.8em;">Stok darah yang ditampilkan dapat berbeda dengan kondisi stok terkini</h6>

        <hr style="margin: 1.5rem 10rem">

        <div class="row">

            <div class="col-sm-3 mb-3 mb-sm-4 px-1">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="d-flex" style="align-items: center">
                            <img src="/img/ilustrasi/ddlp-goldaA.png" alt="" width="100">
                            <div class="">
                                <p style="line-height: 15px"> <span class="text-uppercase fw-bold" style="font-size: 0.6em; color: #a9a9a9">Total </span><br> Golda A</p>
                                <p class="fw-bold fs-2" style="line-height: 10px; color: #e60000">
                                    {{ $golda_a }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 px-1">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="d-flex" style="align-items: center">
                            <img src="/img/ilustrasi/ddlp-goldaB.png" alt="" width="100">
                            <div class="">
                                <p style="line-height: 15px"> <span class="text-uppercase fw-bold" style="font-size: 0.6em; color: #a9a9a9">Total </span><br> Golda B</p>
                                <p class="fw-bold fs-2" style="line-height: 10px; color: #e60000">
                                    {{ $golda_b }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 px-1">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="d-flex" style="align-items: center">
                            <img src="/img/ilustrasi/ddlp-goldaAB.png" alt="" width="100">
                            <div class="">
                                <p style="line-height: 15px"> <span class="text-uppercase fw-bold" style="font-size: 0.6em; color: #a9a9a9">Total </span><br> Golda AB</p>
                                <p class="fw-bold fs-2" style="line-height: 10px; color: #e60000">
                                    {{ $golda_ab }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 px-1">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="d-flex" style="align-items: center">
                            <img src="/img/ilustrasi/ddlp-goldaO.png" alt="" width="100">
                            <div class="">
                                <p style="line-height: 15px"> <span class="text-uppercase fw-bold" style="font-size: 0.6em; color: #a9a9a9">Total </span><br> Golda O</p>
                                <p class="fw-bold fs-2" style="line-height: 10px; color: #e60000">
                                    {{ $golda_o }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="table-responsive-lg rounded">
                    <table class="table table-striped table-hover table-sm table-bordered" style="font-size: 0.8em">
                        <thead class="text-center text-white" style="background-color: #e60000">
                            <tr>
                                <th class="py-3 px-1" scope="col">NO</th>
                                <th class="col-lg-4 py-3 px-1" scope="col">UDD PMI - TEMPAT</th>
                                <th class="py-3 px-1" scope="col">GOLDA A</th>
                                <th class="py-3 px-1" scope="col">GOLDA B</th>
                                <th class="py-3 px-1" scope="col">GOLDA AB</th>
                                <th class="py-3 px-1" scope="col">GOLDA O</th>
                                <th class="py-3 px-1" scope="col">TANGGAL UPDATE</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($dataStokDarah as $data)
                                <tr>
                                    <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                                    <td>{{ $data->AlamatUDD->udd_kabkot }}</td>
                                    <td class="text-center">{{ $data->golda_a }}</td>
                                    <td class="text-center">{{ $data->golda_b }}</td>
                                    <td class="text-center">{{ $data->golda_ab }}</td>
                                    <td class="text-center">{{ $data->golda_o }}</td>
                                    <td class="text-center">{{ $data->updated_at }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
