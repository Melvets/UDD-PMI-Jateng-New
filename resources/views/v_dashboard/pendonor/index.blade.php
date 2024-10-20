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
                            <div>
                                <a href="{{ route('pendonor.export') }}" class="btn d-none d-sm-inline-block text-white"
                                    style="background-color: #00B050">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-spreadsheet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M8 11h8v7h-8z" /><path d="M8 15h8" /><path d="M11 11v7" /></svg>
                                    Export Data
                                </a>
                                <a href="/dashboard/pendonor/import" class="btn d-none d-sm-inline-block text-white"
                                    style="background-color: #00B050">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-spreadsheet"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M8 11h8v7h-8z" /><path d="M8 15h8" /><path d="M11 11v7" /></svg>
                                    Import Data
                                </a>
                            </div>
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
                                        <th>UDD Kabkot</th>
                                        <th>User Input</th>
                                        <th>No Piagam</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Jumlah Donasi</th>
                                        <th>Piagam Ke- </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($dataPendonor as $data)
                                        <tr>
                                            <td><span class="text-secondary">{{ $loop->iteration }}</span></td>
                                            <td>{{ $data->AlamatUDD->udd_kabkot }}</td>
                                            <td>{{ $data->User->first_name }} {{ $data->User->last_name }}</td>
                                            <td>{{ $data->no_piagam }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->tempat_lahir }}</td>
                                            <td>{{ $data->jk }}</td>
                                            <td>{{ $data->jumlah_donasi }}</td>
                                            <td>{{ $data->piagam_ke }}</td>
                                            <td>
                                                <div class="d-inline-flex">
                                                    <a href="{{ route('pendonor.edit', $data->id) }}"
                                                        class="btn btn-default text-green btn-md shadow rounded-2 p-2"
                                                        title="update"><i class="fas fa-pen"></i></a>
                                                    <a class="btn btn-default text-warning btn-md shadow rounded-2 p-2 modal-detail"
                                                        title="view" data-id="{{ $data->id }}"><i class="fas fa-eye"></i></a>
                                                    <form action="{{ route('pendonor.destroy', $data->id) }}" method="POST">

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
                            {{ $dataPendonor->links() }}
                        </div>

                    </div>
                </div>
                {{-- End Table --}}

            </div>
        </div>
    </div>

    @include('v_dashboard.pendonor.modal.show')

@endsection
