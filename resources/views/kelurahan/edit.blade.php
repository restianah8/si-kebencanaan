@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title"> <i class="fas fa-user"></i> Tambah Data Siswa</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="container">
                                            <div class="form-group">
                                                <label for="" class="col-md-2 control=label">Nis</label>
                                                <input type="text" name="nis" id="nis">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2 control-label">Nama Lengkap</label>
                                                <input type="text" name="name" id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2">Jenis Kelamin</label>
                                                <input type="radio" name="jk" id="jk"> laki laki
                                                <input type="radio" name="jk" id="jk"> perempuan
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2">Kelas</label>
                                                <select name="kls" id="kls">
                                                    <option value="">Pilih Kelas</option>
                                                    <option value="VII">VII</option>
                                                    <option value="VIII">VII</option>
                                                    <option value="IX">IX</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2">Alamat</label>
                                                <input type="text" name="alamat" id="alamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2">Tempat Lahir</label>
                                                <input type="text" name="tempat" id="tempat">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2">Tanggal Lahir</label>
                                                <input type="date" name="tanggal" id="tanggal">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2">Agama</label>
                                                <select name="agama" id="agama">
                                                    <option value="">Pilih Agama</option>
                                                    <option value="">Islam</option>
                                                    <option value="">Kristen</option>
                                                    <option value="">Budha</option>
                                                    <option value="">Hindu</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2">Nama Ayah</label>
                                                <input type="text" name="ayah" id="ayah">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2">Nama Ibu</label>
                                                <input type="text" name="ibu" id="ibu">
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="col-md-2">Foto</label>
                                                <input type="file" name="foto" id="foto">
                                            </div>

                                            <button type="submit" class="btn btn-info">Tambah</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                      <a href="{{ route('datasiswa')}}" class="btn btn-secondary mb-3"><i class="mr-2"></i>Kembali</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
