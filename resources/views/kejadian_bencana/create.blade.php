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
                              <form action="/dashboard/kejadian_bencana/tambah" method="post"
                                novalidate="novalidate" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="jenis_bencana">jenis_bencana:</label>
                                        <select name="id_jenis_bencana" id="jenis_bencana" class="form-control">
                                            @foreach ($jenis_bencana as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kabupaten">kabupaten:</label>
                                            <select name="id_kabupaten" id="kabupaten" class="form-control">
                                                @foreach ($kabupaten as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                     </div>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="kecamatan">Kecamatan:</label>
                                        <select name="id_kecamatan" id="kecamatan" class="form-control">
                                            @foreach ($kecamatan as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                        </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="kelurahan">kelurahana:</label>
                                        <select name="id_kelurahan" id="kelurahan" class="form-control">
                                             @foreach ($kelurahan as $item)
                                                 <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                 </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="tanggal">tanggal:</label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" required="required">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="waktu">waktu:</label>
                                        <input type="time" name="waktu" id="waktu" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="lokasi">lokasi:</label>
                                        <input type="text" name="lokasi" id="lokasi" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="jumlah">jumlah:</label>
                                        <input type="text" name="jumlah" id="jumlah" class="form-control" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="meninggal">meninggal:</label>
                                         <input type="text" name="meninggal" id="meninggal" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="hilang">hilang:</label>
                                        <input type="text" name="hilang" id="hilang" class="form-control" required="required">
                                   </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="luka_luka">luka_luka:</label>
                                        <input type="text" name="luka_luka" id="luka_luka" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="mengungsi">mengungsi:</label>
                                       <input type="text" name="mengungsi" id="mengungsi" class="form-control" required="required">
                                   </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="terdampak">terdampak:</label>
                                       <input type="text" name="terdampak" id="terdampak" class="form-control" required="required">
                                   </div>
                               </div>
                               <div class="col-md-6">
                                <div class="form-group">
                                   <label for="rumah_RB">rumah_RB:</label>
                                   <input type="text" name="rumah_RB" id="rumah_RB" class="form-control" required="required">
                               </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="rumah_RR">rumah_RR:</label>
                                     <input type="text" name="rumah_RR" id="rumah_RR" class="form-control" required="required">
                                 </div>
                                 </div>
                                 <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="rumah_RS">rumah_RS:</label>
                                  <input type="text" name="rumah_RS" id="rumah_RS" class="form-control" required="required">
                                 </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                                <div class="form-group">
                                   <label for="rumah_terendam">rumah_terendam:</label>
                                   <input type="text" name="rumah_terendam" id="rumah_terendam" class="form-control" required="required">
                               </div>
                             </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="fasilitas_pendidikan">fasilitas_pendidikan:</label>
                                       <input type="text" name="fasilitas_pendidikan" id="fasilitas_pendidikan" class="form-control" required="required">
                                   </div>
                                 </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-6">
                                 <div class="form-group">
                                   <label for="fasilitas_peribadatan">fasilitas_peribadatan:</label>
                                   <input type="text" name="fasilitas_peribadatan"
                                   id="fasilitas_peribadatan" class="form-control" required="required">
                                 </div>
                               </div>
                              <div class="col-md-6">
                               <div class="form-group">
                                 <label for="fasilitas_perkantoran">fasilitas_perkantoran:</label>
                                  <input type="text" name="fasilitas_perkantoran" id="fasilitas_perkantoran" class="form-control" required="required">
                               </div>
                             </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label for="fasilitas_kesehatan">fasilitas_kesehatan:</label>
                                   <input type="text" name="fasilitas_kesehatan" id="fasilitas_kesehatan" class="form-control" required="required">
                                  </div>
                             </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                 <label for="jembatan">jembatan:</label>
                                  <input type="text" name="jembatan" id="jembatan" class="form-control" required="required">
                             </div>
                             </div>
                            </div>
                            <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                   <label for="hutan">hutan:</label>
                                   <input type="text" name="hutan" id="hutan" class="form-control" required="required">
                               </div>
                              </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="lahan">lahan:</label>
                                    <input type="text" name="lahan" id="lahan" class="form-control" required="required">
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                               <div class="form-group">
                                     <label for="sawah">sawah:</label>
                                     <input type="text" name="sawah" id="sawah" class="form-control" required="required">
                                 </div>
                                 </div>
                                <div class="col-md-6">
                                 <div class="form-group">
                                      <label for="kebun">kebun:</label>
                                     <input type="text" name="kebun" id="kebun" class="form-control" required="required">
                                </div>
                                  </div>
                            </div>
                            <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="luas_kerusakan">luas_kerusakan:</label>
                                        <input type="text" name="luas_kerusakan" id="luas_kerusakan" class="form-control" required="required">
                                   </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label for="penyebab">penyebab:</label>
                                            <input type="text" name="penyebab" id="penyebab" class="form-control" required="required">
                                       </div>
                                    </div>
                            </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <label for="upaya">upaya:</label>
                                            <input type="text" name="upaya" id="upaya" class="form-control" required="required">
                                       </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                             <label for="keterangan">keterangan:</label>
                                            <input type="text" name="keterangan" id="keterangan" class="form-control" required="required">
                                       </div>
                                         </div>
                                         <div class="form-group">
                                            <label for="foto">Foto Kejadian:</label>
                                            <input type="file" name="foto" id="foto"
                                                class="form-control  @error('foto') is-invalid @enderror">
                                         </div>
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                 <label for="taksir_kerugian">taksir_kerugian:</label>
                                                <input type="text" name="taksir_kerugian" id="taksir_kerugian" class="form-control" required="required">
                                           </div>
                                             </div>

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

