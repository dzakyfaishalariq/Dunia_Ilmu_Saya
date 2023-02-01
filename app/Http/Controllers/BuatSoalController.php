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
            return redirect('/buat_soal')->with('pesan', 'data soal sudah di masukan dengan judul : ' . $request->judul_soal);
        }
    }
}
