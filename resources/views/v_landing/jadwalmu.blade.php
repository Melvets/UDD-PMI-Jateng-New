@extends('v_landing.layouts.main')

@section('container')
    
    <section>
        <div class="container">

            <h2 class="fw-bold fs-2 text-center" style="padding-top: 6.5rem"> JADWAL <span style="color: #e60000">MOBILE UNIT</span> </h2>
            <h6 class="text-center mb-4" style="font-size: 0.8em;">Jadwal Donor Darah Mobile Unit Hari Ini (tanggal <span style="color: #e60000">{{ date('d M Y') }}</span>)</h6>
        
            <div class="row justify-content-center">
              <div class="col-lg-6">
                <div class="input-group mb-3">
                  <input type="text" class="form-control form-control-sm" placeholder="Search ..." name="search" value="{{ request('search') }}">
                  <button class="btn btn-sm text-white" style="background-color: #e60000" type="submit" id="">Search</button>
                </div>
              </div>
            </div>
        
            <div class="d-flex" style="flex-wrap: wrap; justify-content: center; ">
      
                @foreach ($dataJadwalMU as $data)
                    
                <div class="card my-2" style="width: 13.5rem; font-size:0.8em; margin: 0 7px">
                  <div class="card-header fw-bold text-white text-center" style="background-color: #e60000; font-size: 10px">{{ $data->AlamatUDD->udd_kabkot }}</div>
                  <div class="card-body py-2">
                    <div class="text-secondary mb-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin-filled" width="13" height="13" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" /></svg><span class="ps-1" style="font-size: 0.7em">{{ $data->kabkot }}</span>
                    </div>
                    <p class="fw-bold mb-2" style="font-size: 1.4em; line-height: 20px">{{ $data->tempat }}</p>
                    <p class="mb-2" style="font-size: 0.7em">{{ $data->alamat }}</p>
                    <div class="d-flex pb-0" style="font-size: 0.9em">
                      <p class="border" style="padding: 1px 5px">{{  \Carbon\Carbon::parse($data->jam_mulai)->format('H:i') }}</p> <p style="padding: 1px 5px">-</p> <p class="border" style="padding: 1px 5px">{{ \Carbon\Carbon::parse($data->jam_selesai)->format('H:i') }}</p>
                    </div>
                    <p class="fw-bold mt-0" style="font-size: 0.9em">{{ $data->peruntukan }}</p>
                  </div>
                </div>
                
                @endforeach
        
              </div>  

        </div>
    </section>

@endsection