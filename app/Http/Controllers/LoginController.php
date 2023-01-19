<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        // ! melakukan pengisian data
        $data_user = new User();
        $data_reques = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|unique:users',
            'username' => 'required|max:255',
            'password' => 'required|min:6|max:50',
        ]);
        $data = $data_user->create([
            'nama' => $request->nama,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);
        if ($data) {
            return redirect('/login')->with('pesan', 'data berhasil di kirim');
        } else {
            return redirect('/register')->with('error', 'data belum berhasil dikirim');
        }
    }
    public function login(Request $request)
    {
        // ! validasi untuk login
        $data_reques = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:6|max:50',
        ]);
        if (Auth::attempt($data_reques)) {
            $request->session()->regenerate();
            return redirect()->intended('/home_Admin')->with('pesan', 'Login Berhasil');
        } else {
            return redirect('/login')->with('error', 'Login Belum Berhasil silahkan masukan data yang benar');
        }
    }
    public function logout(Request $request)
    {
        // ! logout user
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('pesan', 'Anda Berhasil Logout');
    }
}
