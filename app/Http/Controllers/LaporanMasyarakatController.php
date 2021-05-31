<?php

namespace App\Http\Controllers;

use App\Models\Laporan_bencana;
use Illuminate\Http\Request;

class LaporanMasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = Laporan_bencana::paginate();

        return view('laporan_masyarakat.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan_bencana  $laporan_bencana
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan_bencana $laporan_bencana)
    {
        return view('laporan_masyarakat.show', compact('laporan_bencana'));
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
        //
    }
}
