<?php

namespace App\Http\Controllers;

use App\Models\Dampak_bencana;
use App\Models\Kejadian_bencana;
use App\Models\korban_bencana;
use Illuminate\Http\Request;

class Korban_bencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $korban_bencana = korban_bencana::with('kejadian_bencana','dampak_bencana')->get();
        return view('korban_bencana.index',compact('korban_bencana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kejadian_bencana = Kejadian_bencana::all();
        $dampak_bencana = Dampak_bencana::all();


        return view('korban_bencana.create', compact('kejadian_bencana','dampak_bencana'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, korban_bencana $korban_bencana)
    {
        $korban_bencana = new korban_bencana(); //manggil model kecamatan
        $korban_bencana->id_kejadian_bencana = $request->id_kejadian_bencana;
        $korban_bencana->id_dampak_bencana = $request->id_dampak_bencana;
        $korban_bencana->laki_laki = $request->input('laki_laki');
        $korban_bencana->perempuan= $request->input('perempuan');
        $korban_bencana->jumlah = $request->input('jumlah');
        $korban_bencana->save();

        return redirect()
            ->to('/dashboard/korban_bencana')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Korban_bencana  $korban_bencana
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
    public function edit(korban_bencana $korban_bencana)
    {
        $kejadian_bencana = Kejadian_bencana::all();
        $dampak_bencana = Dampak_bencana::all();

        return view('korban_bencana.edit', compact('kejadian_bencana','dampak_bencana','korban_bencana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, korban_bencana $korban_bencana)
    {

        $korban_bencana->id_kejadian_bencana = $request->id_kejadian_bencana;
        $korban_bencana->id_dampak_bencana = $request->id_dampak_bencana;
        $korban_bencana->laki_laki = $request->input('laki_laki');
        $korban_bencana->perempuan= $request->input('perempuan');
        $korban_bencana->jumlah = $request->input('jumlah');
        $korban_bencana->save();

        return redirect()
            ->to('/dashboard/korban_bencana')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Korban_bencana  $korban_bencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(korban_bencana $korban_bencana)
    {
        $korban_bencana->delete();

            return redirect()
                ->to('/dashboard/korban_bencana')
                ->withSuccess('Berhasil menghapus data');
    }
}
