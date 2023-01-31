<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

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
        return view('areaAdmin.dashbord', ['title' => $title]);
    }
    public function buat_soal()
    {
        // todo area buat soal
        $title = "Buat_soal (Admin)";
        return view('areaAdmin.buat_soal', ['title' => $title]);
    }
    public function buat_kategori_bidang()
    {
        // todo area buat soal
        $title = "Kategori Bidang (Admin)";
        $data_kategori = Kategori::all();
        return view('areaAdmin.buat_kategori_bidang', [
            'title' => $title,
            'data_kategori' => $data_kategori,
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
