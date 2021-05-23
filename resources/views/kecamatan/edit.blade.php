@extends('layout.template')

@section('title')
    Edit Data Kecamatan

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Data kecamatn</h1>
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
                              <form action="/dashboard/kecamatan/edit/{{ $kecamatan->id }}" method="post" novalidate="novalidate">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nama">Nama kecamatan:</label>
                                    <input type="text" name="nama" value="{{ $kecamatan->nama }}" id="nama" class="form-control" required="required">
                                </div>

                                <div class="form-group text-right">
                                    <input type="submit" value="Simpan Data" class="btn btn-primary">
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
