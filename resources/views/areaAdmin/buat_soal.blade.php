@extends('template.main')
@section('content')
    <div class="row">
        <form action="/buat_soal_system" method="post">
            @csrf
            <div class=" col-lg-12">
                <div class="card">
                    <div class=" card-body">
                        {{-- todo inputan judul --}}
                        <div class=" mt-1">
                            <h6>Judul Soal : </h6>
                            <input type="text" class=" form-control" name="judul_soal" placeholder="Judul Soal">
                        </div>
                        {{-- todo inputan Kategori --}}
                        <div class=" mt-1">
                            <h6>Kategori : </h6>
                            <input type="text" class=" form-control" name="kategori" placeholder="Kategori">
                        </div>
                        {{-- todo input bidang --}}
                        <div class=" mt-1">
                            <h6>Bidang : </h6>
                            <input type="text" class=" form-control" name="bidang" placeholder="Bidang">
                        </div>
                        {{-- todo inputan Jenis --}}
                        <div class=" mt-1">
                            <h6>Jenis : </h6>
                            <div class="row">
                                <div class=" col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" value="sulit"
                                            id="jenis1">
                                        <label class="form-check-label" for="jenis1">
                                            Sulit
                                        </label>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" value="Medium"
                                            id="jenis2">
                                        <label class="form-check-label" for="jenis2">
                                            Medium
                                        </label>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" value="Mudah"
                                            id="jenis3">
                                        <label class="form-check-label" for="jenis3">
                                            Mudah
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- todo input keterangan soal --}}
                        <div class="mt-1">
                            <h6>Keterangan Soal : </h6>
                            <textarea name="keterangan" class=" form-control" id="editor" cols="30" rows="10"></textarea>
                        </div>
                        {{-- todo input soal --}}
                        <div class="mt-1">
                            <h6>Input Soal : </h6>
                            <textarea name="input_soal" class=" form-control" id="editor2" cols="30" rows="10"></textarea>
                        </div>
                        {{-- todo pilihan jawaban --}}
                        <div class=" mt-1">
                            <h6>pilihan : </h6>
                            <div class="row">
                                <div class=" col-lg-6">
                                    <div class=" mb-1">
                                        <label class=" form-label">A.</label>
                                        <input type="text" class=" form-control" name="pilihan1" placeholder="Pilihan 1">
                                    </div>
                                </div>
                                <div class=" col-lg-6">
                                    <div class=" mb-1">
                                        <label class=" form-label">B.</label>
                                        <input type="text" class=" form-control" name="pilihan2" placeholder="Pilihan 2">
                                    </div>
                                </div>
                                <div class=" col-lg-6">
                                    <div class=" mb-1">
                                        <label class=" form-label">C.</label>
                                        <input type="text" class=" form-control" name="pilihan3" placeholder="Pilihan 3">
                                    </div>
                                </div>
                                <div class=" col-lg-6">
                                    <div class=" mb-1">
                                        <label class=" form-label">D.</label>
                                        <input type="text" class=" form-control" name="pilihan4" placeholder="Pilihan 4">
                                    </div>
                                </div>
                                <div class=" col-lg-6">
                                    <div class=" mb-1">
                                        <label class=" form-label">E.</label>
                                        <input type="text" class=" form-control" name="pilihan5" placeholder="Pilihan 5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- todo jawaban soal --}}
                        <div class="mt-1">
                            <h6>Jawaban : </h6>
                            <input type="text" class=" form-control" name="jawaban" placeholder="Jawaban">
                        </div>
                        {{-- todo penjelasan jawaban soal --}}
                        <div class="mt-1">
                            <h6>Penjelasan Jawaban : </h6>
                            <textarea name="penjelasan_jawaban" class=" form-control" id="editor3" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class=" d-grid gap-2 mt-3">
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        // decoupled-document
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
    </script>
@endsection
