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
                                                     <label for="jumlah">jumlah:</label>
                                                    <input type="text" name="jumlah" value="{{ $kejadian_bencana->jumlah }}"
                                                     id="jumlah" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label for="meninggal_hilang">meninggal_hilang:</label>
                                                     <input type="text" name="meninggal_hilang" value="{{ $kejadian_bencana->meninggal_hilang }}"
                                                       id="meninggal_hilang" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label for="luka_luka">luka_luka:</label>
                                                    <input type="text" name="luka_luka" value="{{ $kejadian_bencana->luka_luka }}"
                                                    id="luka_luka" class="form-control" required="required">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="mengungsi_terdampak">mengungsi_terdampak:</label>
                                                   <input type="text" name="mengungsi_terdampak" value="{{ $kejadian_bencana->mengungsi_terdampak }}"
                                                    id="mengungsi_terdampak" class="form-control" required="required">
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                            <div class="form-group">
                                               <label for="rumah_RB">rumah_RB:</label>
                                               <input type="text" name="rumah_RB" value="{{ $kejadian_bencana->rumah_RB }}"
                                               id="rumah_RB" class="form-control" required="required">
                                           </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="rumah_RR">rumah_RR:</label>
                                                 <input type="text" name="rumah_RR" value="{{ $kejadian_bencana->rumah_RR }}"
                                                  id="rumah_RR" class="form-control" required="required">
                                             </div>
                                             </div>
                                             <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="rumah_RS">rumah_RS:</label>
                                              <input type="text" name="rumah_RS" value="{{ $kejadian_bencana->rumah_RS }}"
                                              id="rumah_RS" class="form-control" required="required">
                                             </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                           <div class="col-md-6">
                                            <div class="form-group">
                                               <label for="rumah_terendam">rumah_terendam:</label>
                                               <input type="text" name="rumah_terendam" value="{{ $kejadian_bencana->rumah_terendam }}"
                                                 id="rumah_terendam" class="form-control" required="required">
                                           </div>
                                          </div>
                                          <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="fasilitas_pendidikan">fasilitas_pendidikan:</label>
                                                   <input type="text" name="fasilitas_pendidikan" value="{{ $kejadian_bencana->fasilitas_pendidikan }}"
                                                   id="fasilitas_pendidikan" class="form-control" required="required">
                                               </div>
                                           </div>
                                        </div>

                                        <div class="row">
                                           <div class="col-md-6">
                                            <div class="form-group">
                                               <label for="fasilitas_peribadatan">fasilitas_peribadatan:</label>
                                               <input type="text" name="fasilitas_peribadatan" value="{{ $kejadian_bencana->fasilitas_peribadatan }}"
                                               id="fasilitas_peribadatan" class="form-control" required="required">
                                           </div>
                                          </div>
                                            <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label for="fasilitas_perkantoran">fasilitas_perkantoran:</label>
                                                    <input type="text" name="fasilitas_perkantoran" value="{{ $kejadian_bencana->fasilitas_perkantoran }}"
                                                    id="fasilitas_perkantoran" class="form-control" required="required">
                                                </div>
                                              </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label for="fasilitas_kesehatan">fasilitas_kesehatan:</label>
                                                    <input type="text" name="fasilitas_kesehatan" value="{{ $kejadian_bencana->fasilitas_kesehatan }}"
                                                        id="fasilitas_kesehatan" class="form-control" required="required">
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                      <label for="jembatan">jembatan:</label>
                                                      <input type="text" name="jembatan" value="{{ $kejadian_bencana->jembatan }}"
                                                         id="jembatan" class="form-control" required="required">
                                                 </div>
                                             </div>
                                        </div>

                                        <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                     <label for="hutan">hutan:</label>
                                                     <input type="text" name="hutan" value="{{ $kejadian_bencana->hutan }}"
                                                     id="hutan" class="form-control" required="required">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                     <label for="lahan">lahan:</label>
                                                         <input type="text" name="lahan" value="{{ $kejadian_bencana->lahan }}"
                                                         id="lahan" class="form-control" required="required">
                                                </div>
                                             </div>
                                        </div>

                                        <div class="row">
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                     <label for="sawah">sawah:</label>
                                                    <input type="text" name="sawah" value="{{ $kejadian_bencana->sawah }}"
                                                     id="sawah" class="form-control" required="required">
                                                 </div>
                                                </div>
                                             <div class="col-md-6">
                                                 <div class="form-group">
                                                      <label for="kebun">kebun:</label>
                                                     <input type="text" name="kebun" value="{{ $kejadian_bencana->kebun }}"
                                                         id="kebun" class="form-control" required="required">
                                                     </div>
                                                </div>
                                        </div>

                                        <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                     <label for="luas_kerusakan">luas_kerusakan:</label>
                                                      <input type="text" name="luas_kerusakan" value="{{ $kejadian_bencana->luas_kerusakan }}"
                                                        id="luas_kerusakan" class="form-control" required="required">
                                               </div>
                                            </div>
                                              <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="keterangan">keterangan:</label>
                                                        <input type="text" name="keterangan" value="{{ $kejadian_bencana->keterangan }}"
                                                        id="keterangan" class="form-control" required="required">
                                                   </div>
                                                </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-md-6">
                                                     <div class="form-group">
                                                            <label for="taksir_kerugian">taksir_kerugian:</label>
                                                            <input type="text" name="taksir_kerugian" value="{{ $kejadian_bencana->taksir_kerugian }}"
                                                             id="taksir_kerugian" class="form-control" required="required">
                                                       </div>
                                                    </div>
                                                 <div class="col-md-12">
                                                      <div class="form-group text-right">
                                                       <input type="submit" value="simpan Data" class="btn btn-warning">
                                                 </div>
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
