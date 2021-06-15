<?php

namespace App\Http\Controllers\publik;

use App\Http\Controllers\Controller;
use App\Models\Petarawanbencana;
use Illuminate\Http\Request;

class PetarawanbencanaController extends Controller
{
    public function index()
    {
        $petarawanbencana = Petarawanbencana::all();

        return view('public.petarawanbencana.index', compact('petarawanbencana'));
    }
}
