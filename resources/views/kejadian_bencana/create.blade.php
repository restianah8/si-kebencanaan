@extends('layout.template')

@section('title')
    Tambah Data jenis bencana
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data dampak bencana </h1>
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
                              <form action="/dashboard/dampak_bencana/tambah" method="post" novalidate="novalidate">
                                @csrf
                                <div class="col-md-7">
                                    <div class="form-group">
                                    <label for="kab">jenis_bencana:</label>
                                    <select name="id_jenis_bencana" id="kab" class="form-control">
                                        @foreach ($jenis_bencana as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                   </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="kab">kabupaten:</label>
                                        <select name="id_kabupaten" id="kab" class="form-control">
                                            @foreach ($kabupaten as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                 </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                         <label for="id">Kecamatan:</label>
                                        <select name="id_kecamatan" id="id" class="form-control">
                                            @foreach ($kecamatan as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                        </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                         <label for="kab">kelurahana:</label>
                                        <select name="id_kelurahan" id="kab" class="form-control">
                                             @foreach ($kelurahan as $item)
                                                 <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                 </div>
                                <div class="col-md-7">
                                  <div class="form-group">
                                    <label for="nama">tanggal:</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required="required">
                                  </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="nama">waktu:</label>
                                        <input type="text" name="nama" id="nama" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="nama">lokasi:</label>
                                        <input type="text" name="nama" id="nama" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                         <label for="nama">akibat:</label>
                                        <input type="text" name="nama" id="nama" class="form-control" required="required">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="nama">penyebab:</label>
                                         <input type="text" name="nama" id="nama" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="nama">kronologis:</label>
                                        <input type="text" name="nama" id="nama" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                <div class="form-group text-right">
                                    <input type="submit" value="Tambah Data" class="btn btn-warning">
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
