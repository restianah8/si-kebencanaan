@extends('layout.template')

@section('title')
    Tambah Data Kejadian Bencana
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data kejadian bencana </h1>
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
                              <form action="/dashboard/kejadian_bencana/tambah" method="post" novalidate="novalidate">
                                @csrf
                                <div class="col-md-7">
                                    <div class="form-group">
                                    <label for="jenis_bencana">jenis_bencana:</label>
                                    <select name="id_jenis_bencana" id="jenis_bencana" class="form-control">
                                        @foreach ($jenis_bencana as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                   </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="kabupaten">kabupaten:</label>
                                        <select name="id_kabupaten" id="kabupaten" class="form-control">
                                            @foreach ($kabupaten as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                 </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                         <label for="kecamatan">Kecamatan:</label>
                                        <select name="id_kecamatan" id="kecamatan" class="form-control">
                                            @foreach ($kecamatan as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                        </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                         <label for="kelurahan">kelurahana:</label>
                                        <select name="id_kelurahan" id="kelurahan" class="form-control">
                                             @foreach ($kelurahan as $item)
                                                 <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                 </div>
                                <div class="col-md-7">
                                  <div class="form-group">
                                    <label for="tanggal">tanggal:</label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" required="required">
                                  </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="waktu">waktu:</label>
                                        <input type="time" name="waktu" id="waktu" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="lokasi">lokasi:</label>
                                        <input type="text" name="lokasi" id="lokasi" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                         <label for="akibat">akibat:</label>
                                        <input type="text" name="akibat" id="akibat" class="form-control" required="required">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="penyebab">penyebab:</label>
                                         <input type="text" name="penyebab" id="penyebab" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="kronologis">kronologis:</label>
                                        <input type="text" name="kronologis" id="kronologis" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                       <label for="keterangan">keterangan:</label>
                                       <input type="text" name="keterangan" id="keterangan" class="form-control" required="required">
                                   </div>
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

