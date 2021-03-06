@extends('layouts.public')
@section('title', 'Selamat Datang di BPBD Provinsi Bengkulu')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat Datang di Website BPBD Provinsi Bengkulu</h1>
                    {{-- <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with
                        Bootstrap</h2> --}}
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#values"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('menu/images/bpbdd.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header"
                    class="get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <p>INFORMASI KEBENCANAAN BPBD PROVINSI BENGKULU</p>
                    <i class="bi bi-arrow-right"></i>
                </header>

                <div class="row">

                    <div class="col-lg-4 mt-6 mt-lg-0" >
                        <a href="https://www.bmkg.go.id/cuaca/prakiraan-cuaca-indonesia.bmkg?Prov=05&NamaProv=Bengkulu"
                            target="_blank">
                            <div class="box" data-aos="fade-up" data-aos-delay="200"
                            style="background: #f7750c; color: white">
                                <img src="{{ asset('menu/images/cu.jpg') }}" class="img-fluid"
                                    alt="" style="width:280px;">
                                <h3 class="text-white">Cuaca</h3>
                                <p class="text-white">Informasi prakiraan cuaca Provinsi Bengkulu</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-6 mt-lg-0" >
                        <a href="{{ route('lapor_bencana.lapor') }}">
                            <div class="box" data-aos="fade-up" data-aos-delay="400"
                            style="background: #f7750c; color: white">
                                <img src="{{ asset('menu/images/por.jpg') }}" class="img-fluid" alt="" style="width:280px;">
                                <h3 class="text-white">Laporan kejadian Bencana</h3>
                                <p class="text-white">Laporkan kejadian bencana di sekitar dari masyrakat</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mt-6 mt-lg-0">
                        <a href="{{ route('peringatan_dini') }}">
                            <div class="box aos-init" data-aos="fade-up" data-aos-delay="600"
                            style="background: #f7750c; color: white">
                                <img src="{{ asset('menu/images/pering.jpg')}}" class="img-fluid" alt="" style="width:260px;">
                                <h3 class="text-white">Peringatan Dini</h3>

                                <p class="text-white">Informasi peringatan dini bencana di Provinsi Bengkulu</p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </section><!-- End Values Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Prakiraan Cuaca Kota Bengkulu dan Gempa Terkini</p>
                </header>
             <div class="row">
                        <div class="col-md-6">
                            <a class="weatherwidget-io" href="https://forecast7.com/en/n3d79102d26/bengkulu/"
                            data-label_1="BENGKULU" data-label_2="WEATHER" data-theme="original" >BENGKULU WEATHER</a>
                            <script>
                            !function(d,s,id)
                            {var js,fjs=d.getElementsByTagName(s)[0];
                            if(!d.getElementById(id)){js=d.createElement(s);
                            js.id=id;
                            js.src='https://weatherwidget.io/js/widget.min.js';
                            fjs.parentNode.insertBefore(js,fjs);}}
                            (document,'script','weatherwidget-io-js');
                            </script>
                        </div>

                <div class="col-md-6 col-xs-6">
                    <div class="widget p20 mb30 aos-init" data-aos="fade-up" data-aos-delay="400">
                    <div class="card">
                        <div class="card-header" style="background: #f7750c; color: white">
                            <h5 >Gempa Terkini </h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <td>{{ $gempa->Tanggal }},
                                        {{ $gempa->Jam}}</td>
                                </tr>

                                <tr>
                                    <td> Magnitudo
                                        <br>
                                        {{ $gempa->Magnitude }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kedalaman
                                        <br>
                                        {{ $gempa->Kedalaman }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Lokasi
                                        <br>
                                        {{ $gempa->Lintang }} - {{ $gempa->Bujur }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{ $gempa->Wilayah }}</td>
                                </tr>
                                <tr>
                                    <td>{{ $gempa->Potensi }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="https://www.bmkg.go.id/gempabumi/gempabumi-dirasakan.bmkg" target="_blank" class="btn btn-info text-white">Selengkapnya</a>
                    </div>
                </div>

             </div> <!-- / row -->
            </div>

        </section><!-- End Features Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Berita</p>
                </header>

                <div class="row">

                    @foreach ($berita as $item)
                        <div class="col-lg-4">
                            <div class="post-box">
                                <div class="post-img">
                                    @isset($item->media[0])
                                        <img src="{{ $item->media[0]->getFullUrl() }}" class="img-fluid"
                                            alt="{{ $item->judul }}">
                                    @else
                                        <img src="{{ asset('public/assets/img/blog/blog-1.jpg') }}" class="img-fluid" alt="">
                                    @endisset
                                </div>
                                <span class="post-date">{{ date('l, d M Y', strtotime($item->created_at)) }}</span>
                                <h3 class="post-title">
                                    {{ $item->judul }}
                                </h3>
                                <a href="{{ route('berita.read', $item->id) }}"
                                    class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h1>Contact</h1>

          </header>

            <div class="row gy-12">
             <div class="row gy-3">
                <div class="col-md-3">
                  <div class="info-box" style="background: #f7750c; color: white">
                    <i class="bi bi-geo-alt text-white"></i>
                    <h3 class="text-white">Address</h3>
                    <p>JL.P.NATADIRJA KM.7 Kota Bengkulu</p>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="info-box"style="background: #f7750c; color: white">
                    <i class="bi bi-telephone text-white"></i>
                    <h3 class="text-white">Call Us</h3>
                    <p>(0736)-349674 <br>(0736)-349674 </p>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="info-box"style="background: #f7750c; color: white">
                    <i class="bi bi-envelope text-white"></i>
                    <h3 class="text-white">Email Us</h3>
                    <p>bpbdbkl@gmail.com<br>BPBD@gmail.com </p>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="info-box"style="background: #f7750c; color: white">
                    <i class="bi bi-clock text-white"></i>
                    <h3 class="text-white">Open Hours</h3>
                    <p>Senin - Jumat<br>8:00AM - 05:00PM</p>
                  </div>
                </div>
            </div>
        </div>

     </section><!-- End Contact Section -->

@endsection
