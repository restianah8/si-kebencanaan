@extends('layout.template')
@section('title')
    Data Kejadian Becana
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Kejadian Becana</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
    <div class="content mt-3">
        <a href="/dashboard/kejadian_bencana/tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
            Tambah</a>
        <a href="{{route('export_excel')}}" class="btn btn-success btn-sm" target="_blank">EXPORT EXCEL</a>
        <a href="{{route('pdf')}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <div class="table">
                                <table id="bootstrap-data-table" style="width: 100%;" class="table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>id_kabupaten</th>
                                            <th>id_kecamatan</th>
                                            <th>id_kelurahan</th>
                                            <th>id_jenis_bencana</th>
                                            <th>Tanggal </th>
                                            <th>Waktu </th>
                                            <th> Lokasi_kejadian </th>
                                            <th>jumlah</th>
                                            <th>korban_meninggal</th>
                                            <th>korban_hilang</th>
                                            <th>korban_lukaluka</th>
                                            <th>korban_mengungsi</th>
                                            <th>korban_terdampak</th>
                                            <th>rumah_RB</th>
                                            <th>rumah_RR</th>
                                            <th>rumah_RS</th>
                                            <th>Rumah_Terendam</th>
                                            <th>fasilitas_pendidikan</th>
                                            <th>fasilitas_ibada</th>
                                            <th>fasilitas_perkantoran</th>
                                            <th>fasilitas_kesehatan</th>
                                            <th>jembatan</th>
                                            <th>hutan</th>
                                            <th>lahan</th>
                                            <th>sawah</th>
                                            <th>kebun</th>
                                            <th>luas_kerusakan</th>
                                            <th>penyebab</th>
                                            <th>upaya</th>
                                            <th>keterangan</th>
                                            <th>foto</th>
                                            <th>taksir_kerugian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($kejadian_bencana as $item)

                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $item->kabupaten->nama }}</td>
                                                <td>{{ $item->kecamatan->nama }}</td>
                                                <td>{{ $item->kelurahan->nama }}</td>
                                                <td>{{ $item->jenis_bencana->nama }}</td>
                                                <td>{{ $item->tanggal }}</td>
                                                <td>{{ $item->waktu }}</td>
                                                <td>{{ $item->lokasi }}</td>
                                                <td>{{ $item->jumlah }}</td>
                                                <td>{{ $item->meninggal }}</td>
                                                <td>{{ $item->hilang }}</td>
                                                <td>{{ $item->luka_luka }}</td>
                                                <td>{{ $item->mengungsi }}</td>
                                                <td>{{ $item->terdampak }}</td>
                                                <td>{{ $item->rumah_RB }}</td>
                                                <td>{{ $item->rumah_RR }}</td>
                                                <td>{{ $item->rumah_RS }}</td>
                                                <td>{{ $item->rumah_terendam }}</td>
                                                <td>{{ $item->fasilitas_pendidikan }}</td>
                                                <td>{{ $item->fasilitas_peribadatan }}</td>
                                                <td>{{ $item->fasilitas_perkantoran }}</td>
                                                <td>{{ $item->fasilitas_kesehatan }}</td>
                                                <td>{{ $item->jembatan }}</td>
                                                <td>{{ $item->hutan }}</td>
                                                <td>{{ $item->lahan }}</td>
                                                <td>{{ $item->sawah }}</td>
                                                <td>{{ $item->kebun }}</td>
                                                <td>{{ $item->luas_kerusakan }}</td>
                                                <td>{{ $item->penyebab }}</td>
                                                <td>{{ $item->upaya }}</td>
                                                <td>{{ $item->keterangan }}</td>
                                                <td>
                                                    @isset($item->media[0])
                                                <img src="{{ $item->media[0]->getFullUrl() }}" class="img-fluid">
                                            @else
                                                Tidak ada foto
                                            @endisset
                                                </td>
                                                <td>{{ number_format($item->taksir_kerugian, 2, ',', '.') }}</td>

                                                <td>

                                                    <a href="/dashboard/kejadian_bencana/edit/{{ $item->id }}"
                                                        class=" mb-2 fa fa-edit bg-warning p-2 text-white rounded"></a>
                                                    <a href="/dashboard/kejadian_bencana/hapus/{{ $item->id }}"
                                                        onclick="return confirm('Yakin Ingin Menghapus Data')"
                                                        class=" mb-2 fa fa-trash bg-danger p-2 text-white rounded"></a>
                                                </td>
                                            </tr>
                                    @endforeach
                                </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
