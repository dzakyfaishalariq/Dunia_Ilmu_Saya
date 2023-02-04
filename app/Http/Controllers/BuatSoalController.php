<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;

class BuatSoalController extends Controller
{
    // todo membuat soal dan menyimpannya di database soal
    private $data_soal;
    private $buat;
    public function __construct()
    {
        $this->data_soal = new Soal();
    }
    private function code_soal($panjang)
    {
        $char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyx1234567890';
        $charLength = strlen($char);
        $acak = '';
        for ($i = 0; $i < $panjang; $i++) {
            $acak .= $char[rand(0, $charLength - 1)];
        }
        return $acak;
    }
    private function gambar_soal($str)
    {
        // https://dummyimage.com/600x400/b81fb8/3e45a3.gif&text=tex
        $warna_bagroun = ['1dc21d', 'b83d0d', 'ccff00', '0000ff'];
        $warna_tulisan = ['fae500', 'f2f2f2', '000000', '54bbff'];
        $warna_b_acak = $warna_bagroun[rand(0, count($warna_bagroun) - 1)];
        $warna_t_acak = $warna_tulisan[rand(0, count($warna_tulisan) - 1)];
        $tulisan_tiga_carakter = $str[0] . $str[1] . $str[2];
        $gambar = "https://dummyimage.com/600x400/" . $warna_b_acak . "/" . $warna_t_acak . ".gif&text=" . $tulisan_tiga_carakter;
        return $gambar;
    }
    public function buat_soal_system(Request $request)
    {
        $code_soal = new BuatSoalController();
        // dd($request);
        $valid = $request->validate([
            'judul_soal' => 'required|max:255',
            'input_soal' => 'required',
            'pilihan_1' => 'required',
            'pilihan_2' => 'required',
            'pilihan_3' => 'required',
            'pilihan_4' => 'required',
            'pilihan_5' => 'required',
            'jawaban' => 'required',
        ]);
        $this->data_soal->user_id = $request->user_id;
        $this->data_soal->kategori_id = $request->kategori_id;
        $this->data_soal->bidang_id = $request->bidang_id;
        $this->data_soal->Jenis_soal_id = $request->Jenis_soal_id;
        $this->data_soal->kode_soal = $code_soal->code_soal(10);
        $this->data_soal->gambar_karakter_soal = $code_soal->gambar_soal($request->judul_soal);
        $this->data_soal->judul_soal = $request->judul_soal;
        $this->data_soal->keterangan_soal = $request->keterangan_soal;
        $this->data_soal->input_soal = $request->input_soal;
        $this->data_soal->pilihan_1 = $request->pilihan_1;
        $this->data_soal->pilihan_2 = $request->pilihan_2;
        $this->data_soal->pilihan_3 = $request->pilihan_3;
        $this->data_soal->pilihan_4 = $request->pilihan_4;
        $this->data_soal->pilihan_5 = $request->pilihan_5;
        $this->data_soal->jawaban = $request->jawaban;
        $this->data_soal->penjelasan_jawaban = $request->penjelasan_jawaban;
        $hasil = $this->data_soal->save();
        if ($hasil) {
            return redirect('/home_Admin')->with('pesan', 'data soal sudah di masukan dengan judul : ' . $request->judul_soal);
        }
    }
    // todo edit soal
    public function edit_soal(Soal $edit_soal, Request $request)
    {
        $code_soal = new BuatSoalController();
        $edit_soal->judul_soal = $request->judul_soal;
        $edit_soal->gambar_karakter_soal = $code_soal->gambar_soal($request->judul_soal);
        $edit_soal->keterangan_soal = $request->keterangan_soal;
        $edit_soal->input_soal = $request->input_soal;
        $edit_soal->pilihan_1 = $request->pilihan_1;
        $edit_soal->pilihan_2 = $request->pilihan_2;
        $edit_soal->pilihan_3 = $request->pilihan_3;
        $edit_soal->pilihan_4 = $request->pilihan_4;
        $edit_soal->pilihan_5 = $request->pilihan_5;
        $edit_soal->jawaban = $request->jawaban;
        $edit_soal->penjelasan_jawaban = $request->penjelasan_jawaban;
        $edit_soal->save();
        return view('/home_Admin')->with('pesan', 'data soal sudah di ubah dengan judul : ' . $request->judul_soal);
    }
}
