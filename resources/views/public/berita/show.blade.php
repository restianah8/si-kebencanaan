@extends('layouts.public')
@section('title', $berita->judul)

@section('content')
    <section id="contact" class="contact mt-5">

        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>{{ $berita->judul }}</p>
            </header>

            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="text-center">
                    @isset($berita->media[0])
                       <div> <img src="{{ $berita->media[0]->getFullUrl() }}" alt=""
                        class="img-fluid"
                        style="max-width: 40%; max-height: 50%;">></div>
                    @endisset
                    {{ $berita->isi }}
                </div>
            </div>
        </div>

    </section>
@endsection
