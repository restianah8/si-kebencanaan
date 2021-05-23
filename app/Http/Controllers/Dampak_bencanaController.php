<?php

namespace App\Http\Controllers;

use App\Models\Dampak_bencana;
use Illuminate\Http\Request;

class Dampak_bencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dampak_bencana = Dampak_bencana::all();
        return view('dampak_bencana.index',compact('dampak_bencana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dampak_bencana.create');
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

        $dampak_bencana = new Dampak_bencana(); //manggil model dampak bencana
        $dampak_bencana->nama = $nama;
        $dampak_bencana->save();

        return redirect()
            ->to('/dashboard/dampak_bencana')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dampak_bencana  $dampak_bencana
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
    public function destroy(Dampak_bencana $dampak_bencana)
    {
        $dampak_bencana->delete();

        return redirect()
            ->to('/dashboard/dampak_bencana')
            ->withSuccess('Berhasil menghapus data');
    }
}
