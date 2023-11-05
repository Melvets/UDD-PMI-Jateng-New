@extends('v_login.layouts.main')

@section('container')

<div class="position-absolute m-5">
    <img src="img/PMI.png" alt="" width="150">
</div>

    <section class="vh-100">
        <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="img/image_pmi2.png"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 mt-4">
                
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-center mt-1 mb-0 pb-0" style="color: #e60000; font-size: 2.5em;">REGISTER</h5>
                      <h6 class="card-subtitle mb-4 text-body-secondary text-center" style="font-size: 0.8em">Create new account</h6>
                        
                        <form action="/register" method="POST">

                            @csrf
            
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan nama" value="{{ old('name') }}" autofocus required>
            
                                @error('name')
                                    <div class="invalid-feedback mb-2">
                                        {{ $message }}
                                    </div>
                                @enderror
            
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username" value="{{ old('username') }}" autofocus required>
            
                                @error('username')
                                    <div class="invalid-feedback mb-2">
                                        {{ $message }}
                                    </div>
                                @enderror
            
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
            
                                @error('email')
                                    <div class="invalid-feedback mb-2">
                                        {{ $message }}
                                    </div>
                                @enderror
            
                            </div>

                            <div class="mb-3">
                                <label for="alamatudd_id" class="form-label">UDD Kabkot</label>
                                <select class="form-select" aria-label="Default select example" name="alamatudd_id" id="alamatudd_id">
                                    <option value="{{ $dataAlamatUDD[0]->id_alamatudd }}" selected>{{ $dataAlamatUDD[0]->udd_kabkot }}</option>
                                    @foreach ($dataAlamatUDD->skip(1) as $data)
                                        <option value="{{ $data->id_alamatudd }}">{{ $data->udd_kabkot }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                
                                @error('password')
                                    <div class="invalid-feedback mb-2">
                                        {{ $message }}
                                    </div>
                                @enderror 
                            </div>
                        
                            <button class="btn text-white w-100 pt-2" type="submit" style="background-color: #cc0000">Login</button>
                        </form>

                        <small class="d-block text-center mt-3 mb-1">Already have an account? <a href="/login">Login!</a></small>

                    </div>
                  </div>
                
            </div>
        </div>
        </div>
    </section>

@endsection