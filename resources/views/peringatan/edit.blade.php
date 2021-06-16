@extends('layout.template')

@section('title')
    Tambah Data peringatan
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data peringatan </h1>
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
                              <form action="{{ route('peringatan.update',  $peringatan->id)}}" method="post" novalidate="novalidate">
                                @csrf
                                @method('PUT')
                             <div class="row">
                                <div class="col-md-7">
                                  <div class="form-group">
                                    <label for="nama">nama:</label>
                                    <input type="text" name="nama" value="{{ $peringatan->nama }}"
                                     id="nama" class="form-control" required="required">
                                  </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="lokasi">lokasi:</label>
                                        <input type="text" name="lokasi" value="{{ $peringatan->lokasi}}"
                                        id="lokasi" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="penyebab">penyebab:</label>
                                        <input type="text" name="penyebab" value="{{ $peringatan->penyebab }}"
                                        id="penyebab" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                         <label for="tanggal">tanggal:</label>
                                        <input type="date" name="tanggal" value="{{ $peringatan->tanggal }}"
                                         id="tanggal" class="form-control" required="required">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="jam">jam:</label>
                                         <input type="time" name="jam" value="{{ $peringatan->jam }}"
                                          id="jam" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="status">status:</label>
                                        <input type="text" name="status" value="{{ $peringatan->status }}"
                                        id="status" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                     <div class="form-group">
                                        <label for="level">Level:</label>
                                        <input type="number" name="level" value="{{ $peringatan->level }}"
                                         id="level" class="form-control" required="required">
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="status-p">
                                            <input type="checkbox" name="flag_status" value="1" id="status-p">
                                            Selesai?
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="form-group">
                                       <label for="keterangan">keterangan:</label>
                                       <input type="text" name="keterangan" value="{{ $peringatan->keterangan }}"
                                        id="keterangan" class="form-control" required="required">
                                   </div>
                               </div>

                             <div class="row">
                           </div>
                                <div class="col-md-12">
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

