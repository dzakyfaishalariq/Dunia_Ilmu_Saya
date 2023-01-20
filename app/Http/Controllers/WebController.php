<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    // ! end area admin

    // ! area user
    public function blog_home()
    {
        # code...
    }
    // ! end area user
}
