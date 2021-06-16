<?php

namespace App\Http\Controllers;

use App\Models\Petarawanbencana;
use Illuminate\Http\Request;

class PetarawanbencanaController extends Controller
{
    public function index()
    {
        $petarawanbencana = Petarawanbencana::all();
        return view('petarawanbencana.index',compact('petarawanbencana'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petarawanbencana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $petarawanbencana = new Petarawanbencana(); //manggil model kecamatan
        $petarawanbencana->nama_peta = $request->input('nama_peta');
        $petarawanbencana->diskripsi = $request->input('diskripsi');
        $petarawanbencana->save();

        if ($request->has('foto') && $request->file('foto')->isValid()) {
            $petarawanbencana->addMediaFromRequest('foto')
                ->toMediaCollection('foto_petarawanbencana');
        }

        return redirect()
            ->to('/dashboard/petarawanbencana')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis_bencana  $jenis_bencana
     * @return \Illuminate\Http\Response
     */
    public function edit(Petarawanbencana $petarawanbencana)
    {
        return view('petarawanbencana.edit', compact('petarawanbencana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petarawanbencana $petarawanbencana)
    {
        $petarawanbencana->nama_peta = $request->input('nama_peta');
        $petarawanbencana->diskripsi = $request->input('diskripsi');
        $petarawanbencana->save();

        if ($request->has('foto') && $request->file('foto')->isValid()) {
            $petarawanbencana->addMediaFromRequest('foto')
                ->toMediaCollection('foto_petarawanbencana');
        }

        return redirect()
            ->to('/dashboard/petarawanbencana')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petarawanbencana $petarawanbencana)
    {
        $petarawanbencana->delete();

        return redirect()
            ->to('/dashboard/petarawanbencana')
            ->withSuccess('Berhasil menghapus data');
    }
}


