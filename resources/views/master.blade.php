<!DOCTYPE html>
<html>

<head>
    <title>halaman utama</title>
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
    <script src="{{ asset('menu/aset/js/jquery-1.11.0.min.js') }}"></script>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>
    <!--Start-smoth-scrolling-->
    <script type="text/javascript" src="{{ asset('menu/aset/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('menu/aset/js/easing.js') }}"></script>
    <script type="text/javascript" >
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
    <!--start-top-nav-script-->
    <script>
        $(function() {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();
            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function() {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });

    </script>
    <!--End-top-nav-script-->
    <!--light-box-files -->
    <script src="{{ asset('menu/aset/js/jquery.chocolat.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('menu/aset/css/chocolat.css') }}" type="text/css" media="screen"
        charset="utf-8" />
    <!--light-box-files -->
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('#example1 a').Chocolat();
        });

    </script>
</head>

<body>
    <!--start-header-->
	<div class="header" id="home">
		<div class="container">
			<div class="logo ">
				<a href="#"><img src="menu/images/bpbd.png"  alt="" style="width:120px; "/></a>
			</div>

    </div>

    <!--start-top-nav-->
    <nav class="top-nav">
        <ul class="top-nav">
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="about.html">Info Bencana</a></li>
            <li><a href="contact.html">Peta Rawan Bencana</a></li>
            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
        </ul>
        <a href="#" id="pull"><img src="menu/images/menu-icon.png" title="menu" /></a>
    </nav>
    <div class="clearfix"> </div>
    </div>
    </div>
    <!--end-header-->


    <!--start-banner-->
    <div class="banner">
        <div id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <div class="banner-1"></div>
                </li>
                <li>
                    <div class="banner-2"></div>
                </li>
                <li>
                    <div class="banner-3"></div>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--End-banner-->
    <!--Slider-Starts-Here-->
    <script src="{{ asset('menu/aset/js/responsiveslides.min.js') }}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });

    </script>
    <!--End-slider-script-->
    <!--start-build-->
    <div class="build">
        <div class="container">
            <div class="build-mian">
                <div class="col-md-8 build-left">
                    <h1><span>INFORMASI KEBENCANAAN</span></h1>
                    <p>Badan Penangulangan Bencana Daerah Provensi Bengkulu.</p>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--End-build-->
    <!--start-design-->
    <div class="design">
        <div class="container">
            <div class="design-main">
                <div class="col-md-4 design-left">
                    <a target="_blank" href="https://www.bmkg.go.id/cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=05&NamaProv=Bengkulu">
                        <div class="design-text">
                            <img src="menu/images/design-1.png" alt="" />
                            <h3>Cuaca</h3>
                            <p>Informasi perkiraan Cuaca,</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 design-left">
                    <a href="{{ route('lapor_bencana.lapor') }}">
                        <div class="design-text">
                            <img src="menu/images/design-3.png" alt="" />
                            <h3>Laporan Bencana</h3>
                            <p>Lapor Kejadian Bencana,</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 design-left">
                    <a href="{{ route('peringatan_dini') }}">
                        <div class="design-text">
                            <img src="menu/images/design-4.png" alt="" />
                            <h3>Peringat Dini</h3>
                            <p>Informasi Peringatan Dini Bencana,</p>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--Slider-Starts-Here-->
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider5").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });

    </script>
    <!--End-slider-script-->
    <!---pop-up-box---->
    <script type="text/javascript" src="{{ asset('menu/aset/js/modernizr.custom.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('menu/aset/css/popup-box.css') }}" type="text/css" media="all" />
    <script src="{{ asset('menu/aset/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
    <!---//pop-up-box---->

    <!--start-news-->
    <div class="news">
        <div class="container">
            <div class="news-top">
                <h3>Berita Terbaru</h3>
                <p>Berita terbaru Badan Penangulangan Bencana Daerah Provensi Bengkulu</p>
            </div>
            <div class="news-bottom">
                <div class="col-md-4 news-left">
                    <img src="{{ asset('menu/images/banjir1.jpg') }}" alt="" style="width:320px; height:216px"/>
                    <div class="news-main">
                        <h4>Banjir</h4>
                        <ul>
                            <li><span>01/01/2014</span></li>
                            <li><span>5 Comment</span></li>
                        </ul>
                        <p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor
                            tempus sed. Pellentesque nulla tellus,id pulvinar tortor tempus sed. Pellentesque nulla
                            tellus,</p>
                        <div class="news-btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news-left">
                    <img src="{{ asset('menu/images/be.jpg') }}" alt="" style="width:320px; height:216px"/>
                    <div class="news-main">
                        <h4>Tanah Longsor</h4>
                        <ul>
                            <li><span>01/01/2014</span></li>
                            <li><span>5 Comment</span></li>
                        </ul>
                        <p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor
                            tempus sed. Pellentesque nulla tellus,id pulvinar tortor tempus sed. Pellentesque nulla
                            tellus,</p>
                        <div class="news-btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 news-left">
                    <img src="{{ asset('menu/images/gunung3.jpg') }}" alt="" style="width:320px; height:216px" />
                    <div class="news-main">
                        <h4>Eropsi gunung</h4>
                        <ul>
                            <li><span>01/01/2014</span></li>
                            <li><span>5 Comment</span></li>
                        </ul>
                        <p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor
                            tempus sed. Pellentesque nulla tellus,id pulvinar tortor tempus sed. Pellentesque nulla
                            tellus,</p>
                        <div class="news-btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="planning">
                <p>BADAN PENANGGULANGAN BENCANA DAERAH PROVENSI BENGKULU</p>
            </div>
        </div>
    </div>
    <!--end-news-->
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




