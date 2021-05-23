<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout.template');
    }

    public function bencana()
    {
        return view('a_bencana');
    }

    public function kabupaten()
    {
        return view('a_kabupaten');
    }

    public function kebencanaan()
    {
        return view('a_kebencanaan');
    }

    public function laporan()
    {
        return view('a_laporan');
    }

    public function peta()
    {
        return view('a_peta');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
