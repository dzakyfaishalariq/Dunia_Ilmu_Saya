@extends('template.main')
@section('content')
    <div class="row">
        <div class=" col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="/buat_kategori_system" method="post">
                        @csrf
                        {{-- todo inputan Kategori --}}
                        <div class=" mt-1">
                            <h6>Kategori : </h6>
                            <input type="text" class=" form-control" name="kategori" placeholder="Kategori" required>
                        </div>
                        <div class=" mt-1">
                            <input type="text" class=" form-control" name="k_kategori" placeholder="Keterangan">
                        </div>
                        {{-- todo tombol submit --}}
                        <div class="mt-1">
                            <div class=" d-grid gap-2">
                                <button type="submit" class=" btn btn-primary">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <form action="/buat_bidang_system" method="post">
                        @csrf
                        {{-- todo input bidang --}}
                        <div class=" mt-1">
                            <h6>Bidang : </h6>
                            <input type="text" class=" form-control" name="nama_bidang" placeholder="Bidang" required>
                        </div>
                        <div class=" mt-1">
                            <input type="text" class=" form-control" name="keterangan" placeholder="Keterangan">
                        </div>
                        {{-- todo tombol submit --}}
                        <div class="mt-1">
                            <div class=" d-grid gap-2">
                                <button type="submit" class=" btn btn-primary">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h6>Kategori</h6>
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama Kategori</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Keterangan</th>
                                <th
                                    class=" text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_kategori as $kategori)
                                <tr>
                                    <td>
                                        <div class=" badge badge-sm bg-gradient-info">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class=" text-secondary">
                                            {{ $kategori->nama_kategori }}
                                        </div>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $kategori->keterangan }}
                                        </p>
                                    </td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal_{{ $kategori->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg>
                                        </button>
                                        <a href="/hapus_kategori/{{ $kategori->id }}" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal_{{ $kategori->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/edit_data_kategori/{{ $kategori->id }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class=" mt-1">
                                                        <h6>Kategori : </h6>
                                                        <input type="text" class=" form-control" name="nama_kategori"
                                                            placeholder="Kategori" value="{{ $kategori->nama_kategori }}">
                                                    </div>
                                                    <div class=" mt-1">
                                                        <input type="text" class=" form-control" name="keterangan"
                                                            placeholder="Keterangan" value="{{ $kategori->keterangan }}">
                                                    </div>
                                                    {{-- todo tombol submit --}}
                                                    <div class="mt-1">
                                                        <div class=" d-grid gap-2">
                                                            <button type="submit" class=" btn btn-primary">edit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    {{ $data_kategori->links() }}
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h6>Bidang</h6>
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama Bidang</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Keterangan</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_bidang as $bidang)
                                <tr>
                                    <td>
                                        <div class=" badge badge-sm bg-gradient-warning">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $bidang->nama_bidang }}
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        {{ $bidang->keterangan }}
                                    </td>
                                    <td class="align-middle text-center">
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalke2_{{ $bidang->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg>
                                        </button>
                                        <a href="/hapus_bidang/{{ $bidang->id }}" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalke2_{{ $bidang->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/edit_data_bidang/{{ $bidang->id }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class=" mt-1">
                                                        <h6>Kategori : </h6>
                                                        <input type="text" class=" form-control" name="nama_bidang"
                                                            placeholder="Kategori" value="{{ $bidang->nama_bidang }}">
                                                    </div>
                                                    <div class=" mt-1">
                                                        <input type="text" class=" form-control" name="keterangan"
                                                            placeholder="Keterangan" value="{{ $bidang->keterangan }}">
                                                    </div>
                                                    {{-- todo tombol submit --}}
                                                    <div class="mt-1">
                                                        <div class=" d-grid gap-2">
                                                            <button type="submit" class=" btn btn-primary">edit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    {{ $data_bidang->links() }}
                </div>
            </div>
        </div>
    </div>
    @if (session('pesan'))
        <script>
            alert("{{ session('pesan') }}");
        </script>
    @endif
@endsection
