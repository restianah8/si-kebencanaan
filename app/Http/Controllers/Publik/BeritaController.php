<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function show(Berita $berita)
    {
        return view('publik.berita.show', compact('berita'));
    }

}
