<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Kategori;
use App\Models\Soal;

class WebController extends Controller
{
    // ! area admim
    public function login()
    {
        // todo area login
        $title = "Login (Admin)";
        return view('loginRegis_Admin.login', ['title' => $title]);
    }
    public function register()
    {
        // todo area register
        $title = "Register (Admin)";
        return view('loginRegis_Admin.register', ['title' => $title]);
    }
    public function homeAdmin()
    {
        // todo area Home
        $title = "Home (Admin)";
        $data_soal = Soal::with('kategori', 'jenis_soal')->latest()->paginate(10);
        $data_kategori = Kategori::with('soal')->latest()->get();
        return view('areaAdmin.dashbord', ['title' => $title, 'data_soal' => $data_soal, 'data_kategori' => $data_kategori]);
    }
    public function buat_soal()
    {
        // todo area buat soal
        $title = "Buat_soal (Admin)";
        $data_kategori = Kategori::all();
        $data_bidang = Bidang::all();
        return view('areaAdmin.buat_soal', [
            'title' => $title,
            'data_kategori' => $data_kategori,
            'data_bidang' => $data_bidang,
        ]);
    }
    public function buat_kategori_bidang()
    {
        // todo area buat soal
        $title = "Kategori Bidang (Admin)";
        $data_kategori = Kategori::latest()->paginate(4);
        $data_bidang = Bidang::latest()->paginate(4);
        return view('areaAdmin.buat_kategori_bidang', [
            'title' => $title,
            'data_kategori' => $data_kategori,
            'data_bidang' => $data_bidang,
        ]);
    }
    // ! end area admin

    // ! area user
    public function blog_home()
    {
        # code...
    }
    // ! end area user
}
