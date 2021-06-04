<!DOCTYPE html>
<html>

<head>
    <title>Laporkan Kejadian Bencana</title>
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
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="about.html">Info Bencana</a></li>
            <li><a href="404.html">Data Bencana</a></li>
            <li><a href="contact.html">Peta Rawan Bencana</a></li>
            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
        </ul>
        <a href="#" id="pull"><img src="menu/images/menu-icon.png" title="menu" /></a>
    </nav>
    <div class="clearfix"> </div>
    </div>
    </div>
    <!--end-header-->

    <!--start-build-->
    <div class="build" style="margin-top: 20px">
        <div class="container">
            <div class="build-mian">
                <div class="col-md-12 build-left">
                    <h1>Laporkan<span>Bencana</span></h1>
                    <p>Laporkan kejadian bencana di sekitar</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--End-build-->

    </script>
    <!-- //requried-jsfiles-for owl -->
    <!--start-clients-->
    <div class="clients">
        <div class="container">

            @if (session()->has('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success">{{ session()->get('success') }}</div>
                    </div>
                </div>
            @endif
            <form action="{{ route('lapor_bencana.simpan') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                value="{{ old('nama') }}" id="nama" name="nama" required="required" autofocus>

                            @error('nama')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="{{ old('mail') }}" id="email"
                                class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <label for="hp">No. HP:</label>
                            <input type="text" name="no_hp" id="hp" value="{{ old('no_hp') }}" required="required"
                                class="form-control @error('no_hp') is-invalid @enderror">

                            @error('no_hp')
                                <div class="invalid-feedback text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="subjek">Subjek Bencana:</label>
                    <input type="text" name="subjek" id="subjek" value="{{ old('subjek') }}"
                        class="form-control @error('subjek') is-invalid @enderror" required="required">

                    @error('subjek')
                        <div class="invalid-feedback text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="lokasi">Lokasi Bencana:</label>
                    <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi') }}"
                        class="form-control @error('lokasi') is-invalid @enderror" required="required">

                    @error('lokasi')
                        <div class="invalid-feedback text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kronologi">Kronologi Bencana:</label>
                    <textarea name="kronologi" id="kronologi" cols="30" rows="10"
                        class="form-control  @error('kronologi') is-invalid @enderror"
                        required="required">{{ old('kronologi') }}</textarea>

                    @error('kronologi')
                        <div class="invalid-feedback text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="foto">Foto Kejadian:</label>
                    <input type="file" name="foto" id="foto" class="form-control  @error('foto') is-invalid @enderror">

                    @error('foto')
                        <div class="invalid-feedback text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group text-right">
                    <input type="submit" value="Kirim Laporan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <!--end-clients-->


    </script>
    <!--End-slider-script-->
    <!--start-touch-->
    <div class="touch">
        <div class="container">
            <div class="touch-main">
                <div class="col-md-5 touch-left">
                    <h3>ALAMAT BPBD  BENGKULU</h3>
                    <p>34789 Magic City Avenue, Los Angeles, CA, 94048</p>
                    <p>Call: 123 456 789
                    <p>
                    <p>E-mail:<a href="mailto:example@email.com">testmail@sitename.com</a>
                        <span><a href="mailto:example@email.com">testmail@sitename.com</a></span>
                    </p>
                </div>
                <div class="col-md-5 touch-left">
                    <h3>POSDALOP</h3>
                    <p>34789 Magic City Avenue, Los Angeles, CA, 94048</p>
                    <p>Call: 123 456 789
                    <p>
                    <p>E-mail:<a href="mailto:example@email.com">testmail@sitename.com</a>
                        <span><a href="mailto:example@email.com">testmail@sitename.com</a></span>
                    </p>
                    <label>about 2days ago</label>
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

</body>

</html>
