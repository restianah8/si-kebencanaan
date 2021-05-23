<?php

namespace App\Http\Controllers;

use App\Models\Jenis_bencana;
use Illuminate\Http\Request;

class Jenis_bencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_bencana = Jenis_bencana::all();
        return view('jenis_bencana.index',compact('jenis_bencana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis_bencana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;

        $jenis_bencana = new Jenis_bencana(); //manggil model kecamatan
        $jenis_bencana->nama = $nama;
        $jenis_bencana->save();

        return redirect()
            ->to('/dashboard/jenis_bencana')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis_bencana  $jenis_bencana
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
    public function edit(Jenis_bencana $jenis_bencana)
    {
        return view('jenis_bencana.edit', compact('jenis_bencana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis_bencana $jenis_bencana)
    {
        $nama = $request->nama;

        $jenis_bencana->nama = $nama;
        $jenis_bencana->save();

        return redirect()
            ->to('/dashboard/jenis_bencana')
            ->withSuccess('Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
      * @param  \App\Models\Jenis_bencana  $jenis_bencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis_bencana $jenis_bencana)
    {
        $jenis_bencana->delete();

        return redirect()
            ->to('/dashboard/jenis_bencana')
            ->withSuccess('Berhasil menghapus data');
    }
}
