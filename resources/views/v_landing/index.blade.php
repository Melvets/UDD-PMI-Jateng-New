@extends('v_landing.layouts.main')

@section('jadwalmu')
  <div class="container" style="height:1500px;">

    <h2 class="fw-bold fs-2 text-center" style="padding-top: 6.5rem"> JADWAL <span style="color: #e60000">MOBILE UNIT</span> </h2>
    <h6 class="text-center mb-4" style="font-size: 0.8em;">Jadwal Donor Mobile Unit UDD h6MI Se Jateng (Tanggal 16-June-2023)</h6>

    <div class="row justify-content-center">
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
                    <th class="py-3 px-3" scope="col">No</th>
                    <th class="col-lg-2 py-3 px-1" scope="col">UDD PMI - Tempat</th>
                    <th class="py-3 px-1" scope="col">TEMPAT</th>
                    <th class="py-3 px-1" scope="col">ALAMAT</th>
                    <th class="col-lg-1 py-3 px-1" scope="col">JAM MULAI</th>
                    <th class="col-lg-1 py-3 px-1" scope="col">JAM SELESAI</th>
                    <th class="py-3 px-3" scope="col">PERUNTUKAN</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($dataJadwalMU as $data)
                  
                  <tr>
                      <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                      <td>{{ $data->AlamatUDD->udd_kabkot }}</td>
                      <td>{{ $data->tempat }}</td>
                      <td class="text-center">{{ $data->alamat }}</td>
                      <td class="text-center">{{ $data->jam_mulai }}</td>
                      <td class="text-center">{{ $data->jam_selesai }}</td>
                      <td class="text-center">{{ $data->peruntukan }}</td>
                  </tr>
                    
                @endforeach

              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('stokdarah')
  <div class="container" style="height:1500px;">

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

@section('alamatudd')
  <div class="container" style="height:1500px;">

    <h2 class="fw-bold fs-2 text-center" style="padding-top: 6.5rem"> ALAMAT <span style="color: #e60000">UDD </span> </h2>
    <h6 class="text-center mb-4" style="font-size: 0.8em;">Jadwal Donor Mobile Unit UDD h6MI Se Jateng (Tanggal 16-June-2023)</h6>

    <div class="row justify-content-center ">
      <div class="col-lg-6">
        <div class="input-group mb-3">
          <input type="text" class="form-control form-control-sm" placeholder="Search ..." name="search" value="{{ request('search') }}">
          <button class="btn btn-sm text-white" style="background-color: #e60000" type="submit" id="">Search</button>
        </div>
      </div>
    </div>

    <div class="table-responsive-lg">
      <table class="table table-striped table-hover table-sm table-bordered" style="font-size: 0.8em">
          <thead class="text-center text-white" style="background-color: #cc0000">
            <tr>
                <th class="col-lg-1 py-3 px-1" scope="col">No</th>
                <th class="col-lg-2 py-3 px-1" scope="col">UDD KAB/KOTA</th>
                <th class="col-lg-1 py-3 px-1" scope="col">NO TELP</th>
                <th class="col-lg-1 py-3 px-1" scope="col">EMAIL</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($dataAlamatUDD as $data)

              <th scope="row" class="text-center">{{ $loop->iteration }}</th>
              <td>{{ $data->udd_kabkot }} <a href="https://maps.google.com/?q=-6.982232689400667,110.4059355086135" target="_blank">Jl MGR Soegijopranoto SJ No. 31 dan 35</a></td>
              <td class="text-center">{{ $data->telp }}</td>
              <td class="text-center">{{ $data->email }}</td>
          </tr>

            @endforeach

            <tr>
          </tbody>
      </table>
    </div>
  </div>
@endsection