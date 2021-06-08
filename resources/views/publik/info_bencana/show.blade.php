<!DOCTYPE html>
<html>

<head>
    <title>info bencana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link rel="stylesheet" href="{{ asset('menu/aset/css/bootstrap.css') }}" type='text/css' />
    <link rel="stylesheet" href="{{ asset('menu/aset/css/style.css') }}" type='text/css' />
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('template/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/scss/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/assets/css/lib/vector-map/jqvmap.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('template/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('template/assets/scss/style.css')}}">
    <script src="js/jquery-1.11.0.min.js"></script>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>
    <!--Start-smoth-scrolling-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

    </script>

    <style>
        a:hover {
            text-decoration: none
        }

    </style>

    <!--end-smoth-scrolling-->


<body>
    <!--start-top-nav-->
    <nav class="top-nav">
        <ul class="top-nav">
            <li><a href="/" class="active">Home</a></li>
            <li><a href="{{route ('info_bencana')}}">Info Bencana</a></li>
            <li><a href="contact.html">Peta Rawan Bencana</a></li>
            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
        </ul>
        <a href="#" id="pull"><img src="menu/images/menu-icon.png" title="menu" /></a>
    </nav>
    <div class="clearfix"> </div>
    </div>
    </div>

    <div class="breadcrumbs">
        <div class="col-sm-12">
            <div class="page-header float-left">
                <div class="page-title">
                    <h3 class="title mb10 pt20">
                        info BENCANA
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $kejadian_bencana->jenis_bencana->nama }}</h5>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-condensed table-bordered">
                                <tr>
                                    <td>id_kecamatan</td>
                                    <td>{{ $kejadian_bencana->kecamatan->nama }}</td>
                                </tr>
                                <tr>
                                    <td>id_kelurahan</td>
                                    <td>{{ $kejadian_bencana->kelurahan->nama }}</td>
                                </tr>
                                <tr>
                                    <td>jumalh kejadian</td>
                                    <td>{{ $kejadian_bencana->jumlah}}</td>
                                </tr>
                                <tr>
                                    <td>korban meninggal dan hilang</td>
                                    <td>{{ $kejadian_bencana->meninggal_hilang }}</td>
                                </tr>
                                <tr>
                                    <td>korban luka-luka</td>
                                    <td>{{ $kejadian_bencana->luka_luka}}</td>
                                </tr>
                                <tr>
                                    <td>Korban mengungsi dan terdampak</td>
                                    <td>{{ $kejadian_bencana->mengungsi_terdampak }}</td>
                                </tr>
                                <tr>
                                    <td>rumah RB</td>
                                    <td>{{ $kejadian_bencana->rumah_RB}}</td>
                                </tr>
                                <tr>
                                    <td>rumah RR</td>
                                    <td>{{ $kejadian_bencana->rumah_RR}}</td>
                                </tr>
                                <tr>
                                    <td>rumah RS</td>
                                    <td>{{ $kejadian_bencana->rumah_RS}}</td>
                                </tr>
                                <tr>
                                    <td>rumah terendam</td>
                                    <td>{{ $kejadian_bencana->rumah_terendam}}</td>
                                </tr>
                                <tr>
                                    <td>kerusakan fasilitas pendidikan</td>
                                    <td>{{ $kejadian_bencana->fasilitas_pendidikan}}</td>
                                </tr>
                                <tr>
                                    <td>kerusakan fasilitas ibada</td>
                                    <td>{{ $kejadian_bencana->fasilitas_peribadatan}}</td>
                                </tr>
                                <tr>
                                    <td>kerusakan fasilitas kesehatan</td>
                                    <td>{{ $kejadian_bencana->fasilitas_kesehatan}}</td>
                                </tr>
                                <tr>
                                    <td>kerusakan fasilitas perkantoran</td>
                                    <td>{{ $kejadian_bencana->fasilitas_perkantoran}}</td>
                                </tr>
                                <tr>
                                    <td>jembatan</td>
                                    <td>{{ $kejadian_bencana->jembatan}}</td>
                                </tr>
                                <tr>
                                    <td>hutan</td>
                                    <td>{{ $kejadian_bencana->hutan}}</td>
                                </tr>
                                <tr>
                                    <td>lahan</td>
                                    <td>{{ $kejadian_bencana->lahan}}</td>
                                </tr>
                                <tr>
                                    <td>sawah</td>
                                    <td>{{ $kejadian_bencana->sawah}}</td>
                                </tr>
                                <tr>
                                    <td>kebun</td>
                                    <td>{{ $kejadian_bencana->kebun}}</td>
                                </tr>
                                <tr>
                                    <td>luas kerusakan</td>
                                    <td>{{ $kejadian_bencana->luas}}</td>
                                </tr>
                                <tr>
                                    <td>taksir kerugian</td>
                                    <td>{{ $kejadian_bencana->taksir_kerugian}}</td>
                                </tr>

                                <var><tr>
                            </var>
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
                                                    src="https://maps.google.com/maps?q={{ $kejadian_bencana->lokasi_kejadian }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
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
<!--start-touch-->
<div class="touch">
    <div class="container">
        <div class="touch-main">
            <div class="col-md-5 touch-left">
                <h3>ALAMAT BPBD  BENGKULU</h3>
                <p>JL.P.NATADIRJA KM.7</p>
                <p>TELP/FAX(0736)349674
                <p>
                <p>E-mail:<a href="BPBD@gmail.com">BPBD@gmail.com</a>

                </p>
            </div>
            <div class="col-md-5 touch-left">
                <h3>POSDALOP</h3>
                <p>34789 Magic City Avenue, Los Angeles, CA, 94048</p>
                <p>Call: 123 456 789
                <p>
                    <p>E-mail:<a href="BPBD@gmail.com">BPBD@gmail.com</a>
                </p>
            </div>
            <div class="col-md-4 touch-right">
                <ul>
                    <li><a href="#"><span class="fb"> </span></a></li>
                    <li><a href="#"><span class="twt"> </span></a></li>
                    <li><a href="#"><span class="g"> </span></a></li>
                    <li><a href="#"><span class="p"> </span></a></li>
                    <li><a href="#"><span class="drb"> </span></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end-touch-->

</body>

</html>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
