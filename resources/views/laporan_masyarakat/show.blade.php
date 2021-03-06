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
                            <h5 class="card-title">{{ $laporan_bencana->subjek_bencana }}</h5>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-condensed table-bordered">
                                <tr>
                                    <td>Nama pelapor</td>
                                    <td>{{ $laporan_bencana->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $laporan_bencana->email }}</td>
                                </tr>
                                <tr>
                                    <td>HP</td>
                                    <td>{{ $laporan_bencana->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td>Subjek kejadian</td>
                                    <td>{{ $laporan_bencana->subjek_bencana }}</td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>{{ $laporan_bencana->lokasi_kejadian }}</td>
                                </tr>
                                <tr>
                                    <td>Kronologi</td>
                                    <td>{{ $laporan_bencana->kronologi }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal laporan</td>
                                    <td>{{ date('l, d F Y H:i', strtotime($laporan_bencana->created_at)) }}</td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td>
                                        @isset($laporan_bencana->media[0])
                                            <img src="{{ $laporan_bencana->media[0]->getFullUrl() }}" class="img-fluid">
                                        @else
                                            Tidak ada foto
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="mapouter">
                                            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                                                    src="https://maps.google.com/maps?q={{ $laporan_bencana->lokasi_kejadian }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                    frameborder="0" scrolling="no" marginheight="0"
                                                    marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br>
                                                <style>
                                                    .mapouter {
                                                        position: relative;
                                                        text-align: right;
                                                        height: 500px;
                                                        width: 600px;
                                                    }

                                                </style><a href="https://www.embedgooglemap.net">google maps html</a>
                                                <style>
                                                    .gmap_canvas {
                                                        overflow: hidden;
                                                        background: none !important;
                                                        height: 500px;
                                                        width: 600px;
                                                    }

                                                </style>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
