@extends('layout.template')

@section('title')
    edit Data Kejadian Bencana
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>edit Data kejadian bencana </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Credit Card -->
                            <div id="pay-invoice">
                                <div class="card-body">
                                    @foreach ($kejadian_bencana as $item)
                                        <form action="/dashboard/kejadian_bencana/edit/{{ $kejadian_bencana->id }}"
                                            method="post" novalidate="novalidate">
                                            @csrf
                                            @method('PUT')
                                    @endforeach

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jenis_bencana">jenis_bencana:</label>
                                                <select name="id_jenis_bencana" id="jenis_bencana" class="form-control">
                                                    @foreach ($jenis_bencana as $item)
                                                        <option value="{{ $item->id }}" @if ($item->id == $kejadian_bencana->id_jenis_bencana) selected="selected" @endif>
                                                            {{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kabupaten">kabupaten:</label>
                                                <select name="id_kabupaten" id="kabupaten" class="form-control">
                                                    @foreach ($kabupaten as $item)
                                                        <option value="{{ $item->id }}" @if ($item->id == $kejadian_bencana->id_kabupaten) selected="selected" @endif>
                                                            {{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kecamatan">Kecamatan:</label>
                                                <select name="id_kecamatan" id="kecamatan" class="form-control">
                                                    @foreach ($kecamatan as $item)
                                                        <option value="{{ $item->id }}" @if ($item->id == $kejadian_bencana->id_kecamatan) selected="selected" @endif>
                                                            {{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kelurahan">kelurahana:</label>
                                                <select name="id_kelurahan" id="kelurahan" class="form-control">
                                                    @foreach ($kelurahan as $item)
                                                        <option value="{{ $item->id }}" @if ($item->id == $kejadian_bencana->id_kelurahan) selected="selected" @endif>
                                                            {{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tanggal">tanggal:</label>
                                                <input type="date" name="tanggal" value="{{ $kejadian_bencana->tanggal }}"
                                                    id="tanggal" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="waktu">waktu:</label>
                                                <input type="time" name="waktu" value="{{ $kejadian_bencana->waktu }}"
                                                    id="waktu" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lokasi">lokasi:</label>
                                                <input type="text" name="lokasi" value="{{ $kejadian_bencana->lokasi }}"
                                                    id="lokasi" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="akibat">akibat:</label>
                                                <input type="text" name="akibat" value="{{ $kejadian_bencana->akibat }}"
                                                    id="akibat" class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="penyebab">penyebab:</label>
                                                <input type="text" name="penyebab"
                                                    value="{{ $kejadian_bencana->penyebab }}" id="penyebab"
                                                    class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kronologis">kronologis:</label>
                                                <input type="text" name="kronologis"
                                                    value="{{ $kejadian_bencana->kronologis }}" id="kronologis"
                                                    class="form-control" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="keterangan">keterangan:</label>
                                                <textarea name="keterangan" id="keterangan" class="form-control"
                                                    required="required">{{ $kejadian_bencana->keterangan }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group text-right">
                                            <input type="submit" value="simpan Data" class="btn btn-warning">
                                        </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
