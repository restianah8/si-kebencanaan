<?php

namespace App\Http\Controllers;

use App\Models\Jenis_bencana;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kejadian_bencana;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class Kejadian_bencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kejadian_bencana = Kejadian_bencana::with('jenis_bencana', 'kabupaten', 'kecamatan', 'kelurahan')->orderBy('created_at', 'DESC')->get();

        return view('kejadian_bencana.index', compact('kejadian_bencana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_bencana = Jenis_bencana::all();
        $kabupaten = Kabupaten::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();

        return view('kejadian_bencana.create', compact('jenis_bencana', 'kabupaten', 'kecamatan', 'kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $kejadian_bencana = new Kejadian_bencana(); //manggil model kecamatan
        $kejadian_bencana->id_kabupaten = $request->id_kabupaten;
        $kejadian_bencana->id_kecamatan = $request->id_kecamatan;
        $kejadian_bencana->id_kelurahan = $request->id_kelurahan;
        $kejadian_bencana->id_jenis_bencana = $request->id_jenis_bencana;
        $kejadian_bencana->tanggal = $request->input('tanggal');
        $kejadian_bencana->waktu = $request->input('waktu');
        $kejadian_bencana->lokasi = $request->input('lokasi');
        $kejadian_bencana->jumlah = $request->input('jumlah');
        $kejadian_bencana->meninggal_hilang = $request->input('meninggal_hilang');
        $kejadian_bencana->luka_luka = $request->input('luka_luka');
        $kejadian_bencana->mengungsi_terdampak = $request->input('mengungsi_terdampak');
        $kejadian_bencana->rumah_RB = $request->input('rumah_RB');
        $kejadian_bencana->rumah_RR = $request->input('rumah_RR');
        $kejadian_bencana->rumah_RS = $request->input('rumah_RS');
        $kejadian_bencana->rumah_terendam = $request->input('rumah_terendam');
        $kejadian_bencana->fasilitas_pendidikan = $request->input('fasilitas_pendidikan');
        $kejadian_bencana->fasilitas_peribadatan = $request->input('fasilitas_peribadatan');
        $kejadian_bencana->fasilitas_perkantoran = $request->input('fasilitas_perkantoran');
        $kejadian_bencana->fasilitas_kesehatan = $request->input('fasilitas_kesehatan');
        $kejadian_bencana->jembatan = $request->input('jembatan');
        $kejadian_bencana->hutan = $request->input('hutan');
        $kejadian_bencana->lahan = $request->input('lahan');
        $kejadian_bencana->sawah = $request->input('sawah');
        $kejadian_bencana->kebun = $request->input('kebun');
        $kejadian_bencana->luas_kerusakan = $request->input('luas_kerusakan');
        $kejadian_bencana->keterangan = $request->input('keterangan');
        $kejadian_bencana->taksir_kerugian = $request->input('taksir_kerugian');

        $kejadian_bencana->created_at = date('Y-m-d H:i:s');

        $kejadian_bencana->save();

        return redirect()
            ->to('/dashboard/kejadian_bencana')
            ->withSuccess('Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     *  @param  \App\Models\Kejadian_bencana  $kejadian_bencana
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
    public function edit(Kejadian_bencana $kejadian_bencana)
    {
        $jenis_bencana = Jenis_bencana::all();
        $kabupaten = Kabupaten::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();

        return view('kejadian_bencana.edit', compact('jenis_bencana', 'kabupaten', 'kecamatan', 'kelurahan', 'kejadian_bencana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kejadian_bencana $kejadian_bencana)
    {

        $kejadian_bencana->id_kabupaten = $request->id_kabupaten;
        $kejadian_bencana->id_kecamatan = $request->id_kecamatan;
        $kejadian_bencana->id_kelurahan = $request->id_kelurahan;
        $kejadian_bencana->id_jenis_bencana = $request->id_jenis_bencana;
        $kejadian_bencana->tanggal = $request->input('tanggal');
        $kejadian_bencana->waktu = $request->input('waktu');
        $kejadian_bencana->lokasi = $request->input('lokasi');
        $kejadian_bencana->jumlah = $request->input('jumlah');
        $kejadian_bencana->meninggal_hilang = $request->input('meninggal_hilang');
        $kejadian_bencana->luka_luka = $request->input('luka_luka');
        $kejadian_bencana->mengungsi_terdampak = $request->input('mengungsi_terdampak');
        $kejadian_bencana->rumah_RB = $request->input('rumah_RB');
        $kejadian_bencana->rumah_RR = $request->input('rumah_RR');
        $kejadian_bencana->rumah_RS = $request->input('rumah_RS');
        $kejadian_bencana->rumah_terendam = $request->input('rumah_terendam');
        $kejadian_bencana->fasilitas_pendidikan = $request->input('fasilitas_pendidikan');
        $kejadian_bencana->fasilitas_peribadatan = $request->input('fasilitas_peribadatan');
        $kejadian_bencana->fasilitas_perkantoran = $request->input('fasilitas_perkantoran');
        $kejadian_bencana->fasilitas_kesehatan = $request->input('fasilitas_kesehatan');
        $kejadian_bencana->jembatan = $request->input('jembatan');
        $kejadian_bencana->hutan = $request->input('hutan');
        $kejadian_bencana->lahan = $request->input('lahan');
        $kejadian_bencana->sawah = $request->input('sawah');
        $kejadian_bencana->kebun = $request->input('kebun');
        $kejadian_bencana->luas_kerusakan = $request->input('luas_kerusakan');
        $kejadian_bencana->keterangan = $request->input('keterangan');
        $kejadian_bencana->taksir_kerugian = $request->input('taksir_kerugian');

        $kejadian_bencana->save();

        return redirect()
            ->to('/dashboard/kejadian_bencana')
            ->withSuccess('Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kejadian_bencana $kejadian_bencana)
    {
        $kejadian_bencana->delete();

        return redirect()
            ->to('/dashboard/kejadian_bencana')
            ->withSuccess('Berhasil menghapus data');
    }
}
