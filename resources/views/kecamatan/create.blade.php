@extends('layout.template')

@section('title')
    Tambah Data Kecamatan
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data kecamatan</h1>
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
                              <form action="/dashboard/kecamatan/tambah" method="post" novalidate="novalidate">
                                @csrf

                                <div class="form-group">
                                    <label for="nama">Nama kecamatan:</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="id">id_kabupaten:</label>
                                    <input type="text" name="id_kabupaten" id="id_kabupaten" class="form-control" required="required">
                                </div>

                                <div class="form-group text-right">
                                    <input type="submit" value="Tambah Data" class="btn btn-primary">
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
