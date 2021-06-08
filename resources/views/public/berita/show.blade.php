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
                    @isset($berita->media[0])
                        <img src="{{ $berita->media[0]->getFullUurl() }}" alt="" class="img-fluid">
                    @endisset
                    {{ $berita->isi }}
                </div>
            </div>
        </div>

    </section>
@endsection
