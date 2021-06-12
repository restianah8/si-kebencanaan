@extends('layouts.public')
@section('title', $kejadian_bencana->jenis_bencana->nama)

@section('content')

    <section id="contact" class="contact mt-5">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>{{ $kejadian_bencana->jenis_bencana->nama }}</p>
            </header>

            <div class="row gy-1">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                    <div class="table-responsive">
                        <div class="panel-body">
                        <table class="table info table-striped table-condensed table-bordered">
                            <tr>
                                <td>id_kabupaten</td>
                                <td>{{ $kejadian_bencana->kabupaten->nama }}</td>
                            </tr>
                            <tr>
                                <td>id_kecamatan</td>
                                <td>{{ $kejadian_bencana->kecamatan->nama }}</td>
                            </tr>
                            <tr>
                                <td>id_kelurahan</td>
                                <td>{{ $kejadian_bencana->kelurahan->nama }}</td>
                            </tr>
                            <tr>
                                <td>lokasi</td>
                                <td>{{ $kejadian_bencana->lokasi }}</td>
                            </tr>
                            <tr>
                                <td>jumalh kejadian</td>
                                <td>{{ $kejadian_bencana->jumlah }}</td>
                            </tr>
                            <tr>
                                <td>korban meninggal</td>
                                <td>{{ $kejadian_bencana->meninggal}}</td>
                            </tr>
                            <tr>
                                <td>korban hilang</td>
                                <td>{{ $kejadian_bencana->hilang }}</td>
                            </tr>
                            <tr>
                                <td>korban luka-luka</td>
                                <td>{{ $kejadian_bencana->luka_luka }}</td>
                            </tr>
                            <tr>
                                <td>Korban mengungsi </td>
                                <td>{{ $kejadian_bencana->mengungsi }}</td>
                            </tr>
                            <tr>
                                <td>Korban terdampak</td>
                                <td>{{ $kejadian_bencana->terdampak }}</td>
                            </tr>
                            <tr>
                                <td>rumah RB</td>
                                <td>{{ $kejadian_bencana->rumah_RB }}</td>
                            </tr>
                            <tr>
                                <td>rumah RR</td>
                                <td>{{ $kejadian_bencana->rumah_RR }}</td>
                            </tr>
                            <tr>
                                <td>rumah RS</td>
                                <td>{{ $kejadian_bencana->rumah_RS }}</td>
                            </tr>
                            <tr>
                                <td>rumah terendam</td>
                                <td>{{ $kejadian_bencana->rumah_terendam }}</td>
                            </tr>
                            <tr>
                                <td>kerusakan fasilitas pendidikan</td>
                                <td>{{ $kejadian_bencana->fasilitas_pendidikan }}</td>
                            </tr>
                            <tr>
                                <td>kerusakan fasilitas ibada</td>
                                <td>{{ $kejadian_bencana->fasilitas_peribadatan }}</td>
                            </tr>
                            <tr>
                                <td>kerusakan fasilitas kesehatan</td>
                                <td>{{ $kejadian_bencana->fasilitas_kesehatan }}</td>
                            </tr>
                            <tr>
                                <td>kerusakan fasilitas perkantoran</td>
                                <td>{{ $kejadian_bencana->fasilitas_perkantoran }}</td>
                            </tr>
                            <tr>
                                <td>jembatan</td>
                                <td>{{ $kejadian_bencana->jembatan }}</td>
                            </tr>
                            <tr>
                                <td>hutan</td>
                                <td>{{ $kejadian_bencana->hutan }}</td>
                            </tr>
                            <tr>
                                <td>lahan</td>
                                <td>{{ $kejadian_bencana->lahan }}</td>
                            </tr>
                            <tr>
                                <td>sawah</td>
                                <td>{{ $kejadian_bencana->sawah }}</td>
                            </tr>
                            <tr>
                                <td>kebun</td>
                                <td>{{ $kejadian_bencana->kebun }}</td>
                            </tr>
                            <tr>
                                <td>luas kerusakan</td>
                                <td>{{ $kejadian_bencana->luas }}</td>
                            </tr>
                            <tr>
                                <td>penyebab</td>
                                <td>{{ $kejadian_bencana->penyebab }}</td>
                            </tr>
                            <tr>
                                <td>upaya</td>
                                <td>{{ $kejadian_bencana->upaya}}</td>
                            </tr>
                            <tr>
                                <td>keterangan</td>
                                <td>{{ $kejadian_bencana->keterangan }}</td>
                            </tr>
                            <tr>
                                <td>taksir kerugian</td>
                                <td>{{ $kejadian_bencana->taksir_kerugian }}</td>
                            </tr>

                            <var>
                                <tr>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td>
                                        @isset($kejadian_bencana->media[0])
                                            <img src="{{ $kejadian_bencana->media[0]->getFullUrl() }}" class="img-fluid">
                                        @else
                                            Tidak ada foto
                                        @endisset
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <div class="mapouter">
                                            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                                                    src="https://maps.google.com/maps?q={{ $kejadian_bencana->lokasi }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
    </section>
@endsection
