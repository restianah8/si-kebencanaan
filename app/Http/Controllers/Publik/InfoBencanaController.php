<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\Kejadian_bencana;
use Illuminate\Http\Request;

class InfoBencanaController extends Controller
{
    public function index()
    {
        $kejadian_bencana = Kejadian_bencana::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('public.info_bencana.index', compact('kejadian_bencana'));
    }
    public function show(Kejadian_bencana $kejadian_bencana)
    {
        return view('public.info_bencana.show', compact('kejadian_bencana'));
    }

}
