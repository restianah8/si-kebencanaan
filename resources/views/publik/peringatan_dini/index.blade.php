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
            <li><a href="/" class="active">Home</a></li>
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
                    <h1>Peringatan Dini <span>Bencana</span></h1>
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
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-condensed table-bordered">
                            <thead class="thead-dark">
                                <th>nama-bencana</th>
                                <th>lokasi-bencana</th>
                                <th>penyebab</th>
                                <th>tanggal</th>
                                <th>jam</th>
                                <th>status-bencana</th>
                                <th>keterangan</th>
                            </thead>
                            <tbody>
                                @foreach ($peringatan as $item)

                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->lokasi }}</td>
                                        <td>{{ $item->penyebab }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->jam }}</td>
                                        <td>
                                            @if ($item->flag_level == 1)
                                            <span class="label label-success">
                                                @elseif ($item->flag_level == 2)
                                            <span class="label label-info">
                                                @elseif ($item->flag_level == 3)
                                            <span class="label label-warning">
                                                @elseif ($item->flag_level == 4)
                                                <span class="label label-danger">
                                            @endif

                                            {{ $item->Status }}
                                        </span>
                                        </td>
                                        <td>
                                            @if ($item->flag_level == 1)
                                                <span class="label label-success">
                                                    @elseif ($item->flag_level == 2)
                                                <span class="label label-info">
                                                    @elseif ($item->flag_level == 3)
                                                <span class="label label-warning">
                                                    @elseif ($item->flag_level == 4)
                                                    <span class="label label-danger">
                                                @endif
                                                {{ $item->keterangan }}</span>
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
    <!--end-clients-->


    </script>
    <!--End-slider-script-->
    <!--start-touch-->
    <div class="touch">
        <div class="container">
            <div class="touch-main">
                <div class="col-md-5 touch-left">
                    <h3>ALAMAT BPBD BENGKULU</h3>
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
