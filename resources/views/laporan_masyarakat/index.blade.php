@extends('layout.template')
@section('title')
    Laporan Bencana dari Masyarakat
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Laporan Bencana dari Masyarakat</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabel laporan masyrakat</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <tr class="thead-dark">
                                    <th scope="col">no</th>
                                    <th scope="col">Subjek</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Pelapor</th>
                                    <th scope="col">Aksi</th>
                                <tr>
                                <tbody>
                                    @foreach ($laporan as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->subjek_bencana }}</td>
                                            <td>{{ $item->lokasi_kejadian }}</td>
                                            <td>{{ $item->nama_lengkap }}</td>
                                            <td>
                                                <a href="{{ route('laporan_masyarakat.show', $item->id) }}" class="btn btn-sm btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('laporan_masyarakat.hapus', $item->id) }}" onclick="return confirm('Yakin Ingin Menghapus Data')" class=" mb-2 fa fa-trash bg-danger p-2 text-white rounded"></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
