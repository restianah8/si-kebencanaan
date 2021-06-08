<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\Laporan_bencana;
use Illuminate\Http\Request;

class LaporanBencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.laporan_bencana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4|max:128',
            'email' => 'nullable|email|min:12|max:255',
            'no_hp' => 'required|min:9|max:24',
            'subjek' => 'required|min:5|max:1024',
            'lokasi' => 'required|min:4|max:1024',
            'kronologi' => 'required|min:16|max:5096',
            'foto' => 'nullable|mimes:jpg,jpeg,png,bmp'
        ]);

        $laporan = new Laporan_bencana();
        $laporan->nama_lengkap = $request->nama;
        $laporan->email = $request->email;
        $laporan->no_hp = $request->no_hp;
        $laporan->subjek_bencana = $request->subjek;
        $laporan->lokasi_kejadian = $request->lokasi;
        $laporan->kronologi = $request->kronologi;
        $laporan->save();

        if ($request->has('foto') && $request->file('foto')->isValid()) {
            $laporan->addMediaFromRequest('foto')
                ->toMediaCollection('foto_laporan_bencana');
        }

        return redirect()
            ->back()
            ->withSuccess('Berhasil mengirimkan laporan. Kami akan memproses segera');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan_bencana  $laporan_bencana
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan_bencana $laporan_bencana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan_bencana  $laporan_bencana
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan_bencana $laporan_bencana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan_bencana  $laporan_bencana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan_bencana $laporan_bencana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan_bencana  $laporan_bencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan_bencana $laporan_bencana)
    {
        $laporan_bencana->delete();

        return redirect()
            ->to('/dashboard/laporan_bencana')
            ->withSuccess('Berhasil menghapus data');
    }
}
