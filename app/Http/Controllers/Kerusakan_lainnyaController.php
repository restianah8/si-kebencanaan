<?php

namespace App\Http\Controllers;

use App\Models\Kerusakan_lainnya;
use App\Models\Kejadian_bencana;
use Illuminate\Http\Request;

class Kerusakan_lainnyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerusakan_lainnya = Kerusakan_lainnya::with('kejadian_bencana')->get();
        return view('kerusakan_lainnya.index',compact('kerusakan_lainnya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kejadian_bencana = Kejadian_bencana::all();
        return view('kerusakan_lainnya.create', compact('kejadian_bencana'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kerusakan_lainnya $kerusakan_lainnya)
    {
        $kerusakan_lainnya = new Kerusakan_lainnya(); //manggil model kecamatan
        $kerusakan_lainnya->id_kejadian_bencana = $request->id_kejadian_bencana;
        $kerusakan_lainnya->nama_kerusakan = $request->input('nama_kerusakan');
        $kerusakan_lainnya->luas_kerusakan= $request->input('luas_kerusakan');
        $kerusakan_lainnya->jumlah_kerusakan = $request->input('jumlah_kerusakan');
        $kerusakan_lainnya->tafsir_kerugian = $request->input('tafsir_kerugian');
        $kerusakan_lainnya->save();

        return redirect()
            ->to('/dashboard/kerusakan_lainnya')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kerusakan_lainnya $kerusakan_lainnya
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
    public function edit(Kerusakan_lainnya $kerusakan_lainnya)
    {
        $kejadian_bencana = Kejadian_bencana::all();

        return view('kerusakan_lainnya.edit', compact('kejadian_bencana','kerusakan_lainnya'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerusakan_lainnya $kerusakan_lainnya)
    {

        $kerusakan_lainnya->id_kejadian_bencana = $request->id_kejadian_bencana;
        $kerusakan_lainnya->nama_kerusakan = $request->input('nama_kerusakan');
        $kerusakan_lainnya->luas_kerusakan= $request->input('luas_kerusakan');
        $kerusakan_lainnya->jumlah_kerusakan = $request->input('jumlah_kerusakan');
        $kerusakan_lainnya->tafsir_kerugian = $request->input('tafsir_kerugian');
        $kerusakan_lainnya->save();

        return redirect()
            ->to('/dashboard/kerusakan_lainnya')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kerusakan_lainnya $kerusakan_lainnya
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerusakan_lainnya $kerusakan_lainnya)
    {
        $kerusakan_lainnya->delete();

        return redirect()
            ->to('/dashboard/kerusakan_lainnya')
            ->withSuccess('Berhasil menghapus data');
    }
}
