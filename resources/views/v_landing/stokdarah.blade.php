@extends('v_landing.layouts.main')

@section('container')

<div class="container" style="">

    <h2 class="fw-bold fs-2 text-center" style="padding-top: 6.5rem"> STOK <span style="color: #e60000">DARAH</span> </h2>
    <h6 class="text-center mb-4" style="font-size: 0.8em;">Stok darah yang ditampilkan dapat berbeda dengan kondisi stok terkini</h6>

    <div class="row justify-content-center ">
      <div class="col-lg-6">
        <div class="input-group mb-3">
          <input type="text" class="form-control form-control-sm" placeholder="Search ..." name="search" value="{{ request('search') }}">
          <button class="btn btn-sm text-white" style="background-color: #e60000" type="submit" id="">Search</button>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="table-responsive-lg">
          <table class="table table-striped table-hover table-sm table-bordered" style="font-size: 0.8em">
              <thead class="text-center text-white" style="background-color: #cc0000">
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
