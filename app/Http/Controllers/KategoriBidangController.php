<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriBidangController extends Controller
{
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
    //todo area untuk melakukan inputan kategori
    public function buat_kategori(Request $request)
    {
        $data = new KategoriBidangController();
        // $table->string('nama_kategori');
        // $table->text('keterangan');
        // dd("hallo apa kabar");
        $data_kategori = new Kategori();
        $data_reques = $request->validate([
            'kategori' => 'required|unique:kategoris,nama_kategori',
        ]);
        $data_kategori->nama_kategori = $request->kategori;
        $data_kategori->gambar = $data->gambar_soal($request->kategori);
        $data_kategori->keterangan = $request->k_kategori;
        $data_kategori->save();
        // dd($data_reques);
        // $data_kategori->create([
        //     'nama_kategori' => $request->kategori,
        //     'keterangan' => $request->k_kategori
        // ]);
        return redirect('/buat_kategori_bidang')->with('pesan', 'data berhasi di tambahkan untuk kategori : ' . $request->kategori);
    }
    // todo area untuk melakukan inputan bidang
    public function buat_bidang(Request $request)
    {
        $data = new KategoriBidangController();
        $data_bidang = new Bidang();
        $data_reques = $request->validate([
            'nama_bidang' => 'required|unique:bidangs,nama_bidang',
        ]);
        $data_bidang->nama_bidang = $request->nama_bidang;
        $data_bidang->gambar = $data->gambar_soal($request->nama_bidang);
        $data_bidang->keterangan = $request->keterangan;
        $data_bidang->save();
        return redirect('/buat_kategori_bidang')->with('pesan', 'data berhasil di tambahkan untuk bidang : ' . $request->nama_bidang);
    }
    // todo edit data kategori
    public function edit_data(Kategori $kategori, Request $request)
    {
        $data = new KategoriBidangController();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->gambar = $data->gambar_soal($request->nama_kategori);
        $kategori->keterangan = $request->keterangan;
        $kategori->save();
        return redirect('/buat_kategori_bidang')->with('pesan', 'data berhasil di ubah dengan kategori : ' . $request->nama_kategori);
    }
    // todo hapus data kategori yang diinginkan
    public function hapus_data(Kategori $hapus)
    {
        $nama = $hapus->nama_kategori;
        $hapus->delete();
        return redirect('/buat_kategori_bidang')->with('pesan', 'data kategori : ' . $nama . ' berhasil di hapus ');
    }
    // todo edit data bidang
    public function edit_data_bidang(Bidang $bidang, Request $request)
    {
        $data = new KategoriBidangController();
        $bidang->nama_bidang = $request->nama_bidang;
        $bidang->gambar = $data->gambar_soal($request->nama_bidang);
        $bidang->keterangan = $request->keterangan;
        $bidang->save();
        return redirect('/buat_kategori_bidang')->with('pesan', 'data berhasil di tambahkan dengan bidang : ' . $request->nama_bidang);
    }
    // todo hapus data bidang
    public function hapus_data_bidang(Bidang $bidang)
    {
        $nama = $bidang->nama_bidang;
        $bidang->delete();
        return redirect('/buat_kategori_bidang')->with('pesan', 'data bidang : ' . $nama . ' berhasil di hapus');
    }
}
