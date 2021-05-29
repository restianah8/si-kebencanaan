<?php

namespace App\Http\Controllers;

use App\Models\Dampak_bencana;
use App\Models\Kejadian_bencana;
use App\Models\kerusakan;
use Illuminate\Http\Request;

class KerusakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerusakan = kerusakan::with('kejadian_bencana','dampak_bencana')->get();
        return view('kerusakan.index',compact('kerusakan'));
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


        return view('kerusakan.create', compact('kejadian_bencana','dampak_bencana'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, kerusakan $kerusakan)
    {
        $nama = $request->nama;

        $kerusakan = new kerusakan(); //manggil model kecamatan
        $kerusakan->id_kejadian_bencana = $request->id_kejadian_bencana;
        $kerusakan->id_dampak_bencana = $request->id_dampak_bencana;
        $kerusakan->RB = $request->input('RB');
        $kerusakan->RS= $request->input('RS');
        $kerusakan->RR = $request->input('RR');
        $kerusakan->save();

        return redirect()
            ->to('/dashboard/kerusakan')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     *  @param  \App\Models\Kerusakan  $kerusakan
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
    public function update(Request $request, kerusakan $kerusakan)
    {
        $nama = $request->nama;

        $kerusakan = new kerusakan(); //manggil model kecamatan
        $kerusakan->nama = $nama;
        $kerusakan->id_kejadian_bencana = $request->id_kejadian_bencana;
        $kerusakan->id_dampak_bencana = $request->id_dampak_bencana;
        $kerusakan->save();

        return redirect()
            ->to('/dashboard/kerusakan')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kerusakan $kerusakan)
    {
        $kerusakan->delete();

            return redirect()
                ->to('/dashboard/kerusakan')
                ->withSuccess('Berhasil menghapus data');

    }
}
