<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function home() {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required'
        ], [
            'nik.required' => 'isi nik',
            'password.required' => 'isi password',
        ]);

        $infologin = [
            'nik' => $request->nik,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'pegawai') {
                return redirect('/pegawai/dashboard');
            } elseif (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            }
        } else {
            return redirect('')->withErrors('nik atau Password anda salah')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
