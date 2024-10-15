@extends('v_dashboard.layouts.main')

@section('container')
    {{-- Page Header --}}
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">

                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        <a href="/dashboard" class="text-secondary">/dashboard</a><a href="/dashboard/pendonor"
                            class="text-secondary">/pendonor</a>
                    </div>
                    <h2 class="page-title">
                        Data Pendonor {{ auth()->user()->AlamatUDD->udd_kabkot }}
                    </h2>
                </div>

                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="/dashboard/pendonor/create" class="btn d-none d-sm-inline-block text-white"
                            style="background-color: #e60000">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Create New Data
                        </a>
                    </div>
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

                        <div class="card-header flex justify-content-between">
                            <h3 class="card-title">Invoices</h3>
                        </div>

                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-secondary">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="8"
                                            size="3" aria-label="Invoices count">
                                    </div>
                                    entries
                                </div>

                                <form action="/dashboard/jadwalmu" method="GET" class="ms-auto d-flex">
                                    <div class="ms-auto text-secondary">
                                        Search:
                                        <div class="ms-2 d-inline-block">
                                            <input name="search" type="text" class="form-control form-control-sm"
                                                aria-label="Search invoice" value="{{ request('search') }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger"
                                        style="padding: .5rem 0; padding: 0 .5rem; font-size: .7em;">
                                        Search
                                    </button>
                                </form>

                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="w-1">No.</th>
                                        <th>Pekerjaan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($dataPekerjaan as $data)
                                        <tr>
                                            <td><span class="text-secondary">{{ $loop->iteration }}</span></td>
                                            <td>{{ $data->pekerjaan }}</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="{{ route('pendonor.pekerjaan.edit', $data->id) }}"
                                                        class="btn btn-default text-green btn-md shadow rounded-2 p-2"
                                                        title="update"><i class="fas fa-pen"></i></a>
                                                    <a class="btn btn-default text-warning btn-md shadow rounded-2 p-2 modal-detail"
                                                        title="view" data-id="{{ $data->id }}"><i class="fas fa-eye"></i></a>
                                                    <form action="{{ route('pendonor.pekerjaan.destroy', $data->id) }}" method="POST">

                                                        @csrf
                                                        @method('delete')

                                                        <button class="btn btn-default text-red btn-md shadow rounded-2 p-2"
                                                            onclick="return confirm('Apakah Anda yakin?')"> <i
                                                                class="fas fa-trash"></i> </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer d-flex align-items-center" style="justify-content: space-between">
                            <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span>
                                entries</p>
                            {{ $dataPekerjaan->links() }}
                        </div>

                    </div>
                </div>
                {{-- End Table --}}

            </div>
        </div>
    </div>

    @include('v_dashboard.pendonor.modal.show')

@endsection
