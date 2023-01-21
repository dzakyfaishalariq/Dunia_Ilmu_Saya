<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriBidangController extends Controller
{
    //todo area untuk melakukan inputan kategori dan bidang
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
        return redirect('/buat_kategori_bidang')->with('pesan', 'data berhasi di tambahkan');
    }
}
