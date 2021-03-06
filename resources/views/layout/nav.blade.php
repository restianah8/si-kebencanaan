    <script src="{{ asset('template/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('template/assets/js/main.js') }}"></script>
        <!-- Left Panel -->
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand" href="./">Admin</a>
                <a class="navbar-brand hidden" href="">M</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="menu-icon fa fa-table"></i>Data Kebencanaan</a>
                        <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="/dashboard/jenis_bencana">jenis bencana</a></li>
                                <li><i class="fa fa-table"></i><a href="/dashboard/kejadian_bencana">Kejadian Bencana</a></li>

                         </ul>
                    </li>
                    <li>

                    <li>
                        <a href={{ route('peta.index')}}> <i class="menu-icon fa fa-users"></i>Peta Rawan Bencana </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-table"></i>Data wilayah</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/dashboard/data_kabupaten">Kabupaten</a></li>
                            <li><i class="fa fa-table"></i><a href="/dashboard/kecamatan">Kecamatan</a></li>
                            <li><i class="fa fa-table"></i><a href="/dashboard/kelurahan">Kelurahan</a></li>
                        </ul>
                    </li>
                    <li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="menu-icon fa fa-table"></i> publik</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-info"></i><a href="{{ route('laporan_masyarakat.index') }}"> </i>Laporan Masyarakat</a>
                                <li><i class="menu-icon fa fa-info"></i><a href="{{ route('peringatan.index') }}"></i>peringatan dini</a>
                                <li><i class="menu-icon fa fa-info"></i><a href="{{ route('berita.index') }}"></i>berita</a>
                         </ul>
                    </li>


                    <li><br><br><br>
                        <div class="col-sm-8">
                            <div class="user-area dropdown float-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle" src="{{asset('template/images/admin.jpg')}}">
                                </a>
                                <div class="user-menu dropdown-menu">
                                        <a class="nav-link logout-btn" href="#"><i class="fa fa-power-off"></i>  Logout</a>
                                </div>
                            </div>
                        </div>
                    </li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

                </div>
            </div>

        </header><!-- /header -->

        <form action="{{ route('logout') }}" method="post" id="logout-form">
            @csrf
        </form>

        <script>
            jQuery('.logout-btn').click(function(e) {
                   e.preventDefault();

                   jQuery('#logout-form').submit();
               });
           </script>
