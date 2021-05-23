@extends('layout.template')

@section('title')
    Tambah Data jenis bencana
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data jenis bencana </h1>
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
                              <form action="/dashboard/jenis_bencana/tambah" method="post" novalidate="novalidate">
                                @csrf
                                <div class="col-md-7">
                                <div class="form-group">
                                    <label for="nama">Nama Bencana:</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required="required">
                                </div>
                                <div class="col-md-2">
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

