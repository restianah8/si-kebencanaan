@extends('layouts.public')
@section('title', 'Laporkan Kejadian Bencana')

@section('content')
    <section id="contact" class="contact mt-5">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Laporkan Kejadian Bencana</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-12">
                    <form action="{{ route('lapor_bencana.simpan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">

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
                                        <input type="text" name="no_hp" id="hp" value="{{ old('no_hp') }}"
                                            required="required" class="form-control @error('no_hp') is-invalid @enderror">

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
                                <input type="file" name="foto" id="foto"
                                    class="form-control  @error('foto') is-invalid @enderror">

                                @error('foto')
                                    <div class="invalid-feedback text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Kirim Laporan</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
@endsection
