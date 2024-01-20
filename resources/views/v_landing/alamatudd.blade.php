@extends('v_landing.layouts.main')

@section('container')

    <div class="" style="margin: 0 15%; padding-top: 6.5rem">

        <h2 class="fw-bold fs-1 text-center"> ALAMAT <span style="color: #e60000">UDD</span> </h2>
        <h6 class="text-center mb-4" style="font-size: 0.8em;">Alamat UDD PMI Kabupaten / Kota se-Jawa Tengah</h6>

        <hr style="margin: 1.5rem 10rem">

        <div id="map" style="height: 200px; border: solid #e60000 2px; border-radius: 10px; margin-bottom: 1.5rem"></div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="table-responsive-lg rounded">
                    <table class="table table-striped table-hover table-sm table-bordered" style="font-size: 0.8em">
                        <thead class="text-center text-white" style="background-color: #e60000">
                            <tr>
                                <th class="py-3 px-1" scope="col">NO</th>
                                <th class="col-lg-3 py-3 px-1" scope="col">UDD PMI KABUPATEN / KOTA</th>
                                <th class="py-3 px-1" scope="col">ALAMAT</th>
                                <th class="col-md-2 py-3 px-1" scope="col">TELP</th>
                                <th class="py-3 px-1" scope="col">EMAIL</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($dataAlamatUDD as $data)
                                <tr>
                                    <th scope="row" class="text-center py-2" style="color: #cc0000">{{ $loop->iteration }}</th>
                                    <td class="py-2">{{ $data->udd_kabkot }}</td>
                                    <td class="py-2">{{ $data->alamat }}</td>
                                    <td class="text-center py-2">{{ $data->telp }}</td>
                                    <td class="py-2">{{ $data->email }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
