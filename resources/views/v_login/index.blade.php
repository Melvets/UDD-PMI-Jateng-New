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
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                      <h5 class="card-title fw-bold text-center mt-3 mb-0 pb-0" style="color: #e60000; font-size: 2.5em;">LOGIN</h5>
                      <h6 class="card-subtitle mb-4 text-body-secondary text-center" style="font-size: 0.8em">Login to your account</h6>

                        @if(session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="/login" method="POST">

                            @csrf

                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" autofocus required>
                                <label for="email" style="font-size: 0.9em">Email address</label>

                                @error('email')
                                    <div class="invalid-feedback mb-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="password" required>
                                <label for="password" style="font-size: 0.9em">Password</label>

                                @error('password')
                                    <div class="invalid-feedback mb-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="btn text-white w-100 pt-2 mb-5" type="submit" style="background-color: #cc0000">Login</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

@endsection
