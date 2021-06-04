<?php

namespace App\Http\Controllers;

use App\Models\Peringatan;
use Illuminate\Http\Request;

class PeringatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peringatan = Peringatan::all();

        return view('peringatan.index', compact('peringatan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('peringatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peringatan = new Peringatan();
        $peringatan->nama = $request->input('nama');
        $peringatan->lokasi = $request->input('lokasi');
        $peringatan->penyebab = $request->input('penyebab');
        $peringatan->tanggal = $request->input('tanggal');
        $peringatan->jam= $request->input('jam');
        $peringatan->status = $request->input('status');
        $peringatan->keterangan = $request->input('keterangan');
        $peringatan->flag_level = $request->level;
        $peringatan->flag_status = ($request->flag_status == 1) ? true : false;
        $peringatan->save();

        return redirect()
            ->to('/dashboard/peringatan')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peringatan  $peringatan
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
    public function edit(Peringatan $peringatan)
    {
        return view('peringatan.edit', compact('peringatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peringatan $peringatan)
    {
        $peringatan->nama = $request->input('nama');
        $peringatan->lokasi = $request->input('lokasi');
        $peringatan->penyebab = $request->input('penyebab');
        $peringatan->tanggal = $request->input('tanggal');
        $peringatan->jam= $request->input('jam');
        $peringatan->status = $request->input('status');
        $peringatan->keterangan = $request->input('keterangan');
        $peringatan->save();

        return redirect()
            ->to('/dashboard/peringatan')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peringatan $peringatan)
    {
        $peringatan->delete();

        return redirect()
            ->to('/dashboard/peringatan')
            ->withSuccess('Berhasil menghapus data');
    }
}
