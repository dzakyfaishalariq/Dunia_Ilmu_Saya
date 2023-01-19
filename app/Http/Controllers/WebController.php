<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    // ! area admim
    public function login()
    {
        $title = "Login (Admin)";
        return view('loginRegis_Admin.login', ['title' => $title]);
    }
    public function register()
    {
        $title = "Register (Admin)";
        return view('loginRegis_Admin.register', ['title' => $title]);
    }
    public function homeAdmin()
    {
        $title = "Home (Admin)";
        return view('areaAdmin.dashbord', ['title' => $title]);
    }
    // ! end area admin

    // ! area user
    public function blog_home()
    {
        # code...
    }
    // ! end area user
}
