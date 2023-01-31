<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriBidangController extends Controller
{
    //todo area untuk melakukan inputan kategori
    public function buat_kategori(Request $request)
    {
        // $table->string('nama_kategori');
        // $table->text('keterangan');
        // dd("hallo apa kabar");
        $data_kategori = new Kategori();
        // $data_reques = $request->validate([
        //     'kategori' => 'required',
        //     'k_kategori' => 'required'
        // ]);
        $data_kategori->nama_kategori = $request->kategori;
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
        $data_bidang = new Bidang();
        $data_bidang->nama_bidang = $request->nama_bidang;
        $data_bidang->keterangan = $request->keterangan;
        $data_bidang->save();
        return redirect('/buat_kategori_bidang')->with('pesan', 'data berhasil di tambahkan untuk bidang : ' . $request->nama_bidang);
    }
    // todo edit data kategori
    public function edit_data(Kategori $kategori, Request $request)
    {
        $kategori->nama_kategori = $request->nama_kategori;
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
        $bidang->nama_bidang = $request->nama_bidang;
        $bidang->keterangan = $request->keterangan;
        $bidang->save();
        return redirect('/buat_kategori_bidang')->with('pesan', 'data berhasil di tambahkan dengan bidang : ' . $request->nama_bidang);
    }
    // todo hapus data bidang
    public function hapus_data_bidang(Bidang $bidang)
    {
        $nama = $bidang->nama_bidang;
        $bidang->delete();
        return redirect('/buat_kategori_bidang')->with('pesan','data bidang : '.$nama.' berhasil di hapus');
    }
}
