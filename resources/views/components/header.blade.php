<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('menu/images/bpbd.png') }}" alt="">
            <span>BPBD</span>
        </a>


        <nav id="navbar" class="navbar">
            <ul>

                <li><a class="nav-link active" href="{{ route('home') }}">Beranda</a></li>
                <li><a class="nav-link " href="{{ route('info_bencana') }}">Info Bencana</a></li>
                <li><a class="nav-link " href="{{ route('peta')}}">Peta Rawan Bencana</a></li>
                @if (auth()->check())
                    <li><a class="getstarted " href="{{ route('dashboard') }}">Dasbor</a></li>
                @else
                    <li><a class="getstarted " href="{{ route('login') }}">Login</a></li>
                @endif

                    <a href="https://twitter.com/BpbdBengkulu" class="twitter"><li class="fa fa-twitter"></li></a>
                    <a href="https://www.facebook.com/siagabencana.provinsi.5" class="facebook"><li class="bi bi-facebook"></li></a>
                    <a href="https://instagram.com/bpbdprovbengkulu?utm_medium=copy_link" class="instagram"><li class="bi bi-instagram bx bxl-instagram"></li></a>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
