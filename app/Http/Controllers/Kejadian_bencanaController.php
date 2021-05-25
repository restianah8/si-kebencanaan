<?php

namespace App\Http\Controllers;

use App\Models\Jenis_bencana;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kejadian_bencana;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class Kejadian_bencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kejadian_bencana = Kejadian_bencana::with('jenis_bencana','kabupaten','kecamatan','kelurahan')->get();

        return view('kejadian_bencana.index',compact('kejadian_bencana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_bencana = Jenis_bencana::all();
        $kabupaten = Kabupaten::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();

        return view('kejadian_bencana.create', compact('jenis_bencana','kabupaten','kecamatan','kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $kejadian_bencana = new Kejadian_bencana(); //manggil model kecamatan
        $kejadian_bencana->id_jenis_bencana = $request->id_jenis_bencana;
        $kejadian_bencana->id_kabupaten = $request->id_kabupaten;
        $kejadian_bencana->id_kecamatan = $request->id_kecamatan;
        $kejadian_bencana->id_kelurahan = $request->id_kelurahan;
        $kejadian_bencana->save();

        return redirect()
            ->to('/dashboard/kejadian_encana')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
    *  @param  \App\Models\Kejadian_bencana  $kejadian_bencana
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
