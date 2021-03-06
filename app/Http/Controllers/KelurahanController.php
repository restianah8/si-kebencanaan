<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahan = Kelurahan::with('kecamatan')->get();

        return view('kelurahan.index',compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::all();

        return view('kelurahan.create', compact('kecamatan'));
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

        $kelurahan = new Kelurahan(); //manggil model kecamatan
        $kelurahan->nama = $nama;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();

        return redirect()
            ->to('/dashboard/kelurahan')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     *  @param  \App\Models\Kelurahan  $kelurahan
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
    public function edit(Kelurahan $kelurahan)
    {
        $kecamatan = Kecamatan::all();

        return view('kelurahan.edit', compact('kecamatan', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {
        $nama = $request->nama;

        $kelurahan->nama = $nama;
        $kelurahan->id_kecamatan = $request->id_kecamatan;
        $kelurahan->save();

        return redirect()
            ->to('/dashboard/kelurahan')
            ->withSuccess('Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelurahan $kelurahan)
    {
             $kelurahan->delete();

            return redirect()
                ->to('/dashboard/kelurahan')
                ->withSuccess('Berhasil menghapus data');

    }
}
