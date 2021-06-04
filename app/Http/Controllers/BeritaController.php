<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new Berita();
        $berita->judul = $request->input('judul');
        $berita->isi = $request->input('isi');
        $berita->save();

        return redirect()
            ->to('/dashboard/berita')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
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
    public function edit(Berita $berita)
    {
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $berita->judul = $request->input('judul');
        $berita->isi = $request->input('isi');
        $berita->save();

        return redirect()
            ->to('/dashboard/berita')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()
            ->to('/dashboard/berita')
            ->withSuccess('Berhasil menghapus data');
    }
}
