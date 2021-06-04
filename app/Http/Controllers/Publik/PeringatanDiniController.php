<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\Peringatan;
use Illuminate\Http\Request;

class PeringatanDiniController extends Controller
{
    public function index()
    {
        $peringatan = Peringatan::all();

        return view('publik.peringatan_dini.index', compact('peringatan'));
    }
}
