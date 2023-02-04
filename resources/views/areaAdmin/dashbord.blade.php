@extends('template.main')
@section('content')
    <div class="row">
        {{-- todo area kategori --}}
        <hr class=" border-1 bg-dark">
        <h6 class=" text-dark">Kategori Soal</h6>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Matematika</p>
                                <h5 class="font-weight-bolder mb-0">
                                    1000
                                    <span class="text-success text-sm font-weight-bolder">Soal</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">IPA</p>
                                <h5 class="font-weight-bolder mb-0">
                                    1000
                                    <span class="text-success text-sm font-weight-bolder">Soal</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">IPS</p>
                                <h5 class="font-weight-bolder mb-0">
                                    1000
                                    <span class="text-success text-sm font-weight-bolder">Soal</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">FISIKA</p>
                                <h5 class="font-weight-bolder mb-0">
                                    1000
                                    <span class="text-success text-sm font-weight-bolder">Soal</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class=" border-1 mt-4 bg-dark">

        {{-- todo end area kategori --}}
    </div>
    {{-- Todo Area tabel --}}
    <div class="row my-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Soal yang Baru dibuat</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">Dapat anda lihat</span> di hari ini
                            </p>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Judul Soal</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jenis Soal</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kategori Soal</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal dibuat</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Aksi</th>
                                </tr>
                            </thead>
                            {{-- todo area tabel --}}
                            <tbody>
                                @foreach ($data_soal as $soal)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ $soal->gambar_karakter_soal }}"
                                                        class="avatar avatar-sm me-3" alt="atlassian">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $soal->judul_soal }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2">
                                                <div class=" badge badge-sm bg-gradient-info ">
                                                    {{ $soal->kategori->nama_kategori }}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mt-2">
                                                @if ($soal->jenis_soal->jenis == 'Sulit')
                                                    <div class="badge badge-sm bg-gradient-danger">
                                                        {{ $soal->jenis_soal->jenis }}
                                                    </div>
                                                @elseif ($soal->jenis_soal->jenis == 'Medium')
                                                    <div class="badge badge-sm bg-gradient-warning">
                                                        {{ $soal->jenis_soal->jenis }}
                                                    </div>
                                                @elseif ($soal->jenis_soal->jenis == 'Mudah')
                                                    <div class="badge badge-sm bg-gradient-info">
                                                        {{ $soal->jenis_soal->jenis }}
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            {{ $soal->created_at->format('d F Y') }}
                                        </td>
                                        <td>
                                            <a href="#" class=" btn bg-gradient-info">Baca</a>
                                            <a href="#" class=" btn btn-success">Ubah</a>
                                            <a href="#" class=" btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            {{-- todo end area tabel --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- todo end area tabel --}}
@endsection
