@extends('layout.template')

@section('title')
    peta rawan bencana
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>edit peta rawan bencana </h1>
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
                              <form action=" {{ route('peta.update',  $petarawanbencana->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="col-md-7">
                                <div class="form-group">
                                    <label for="nama_peta">Nama peta:</label>
                                    <input type="text" name="nama_peta" value="{{ $petarawanbencana->nama_peta }}"
                                    id="nama_peta" class="form-control" required="required">
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="diskripsi">diskripsi:</label>
                                        <input type="text" name="diskripsi" value="{{ $petarawanbencana->diskripsi }}"
                                         id="diskripsi" class="form-control" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="foto">peta:</label>
                                        <input type="file" name="foto"  value="{{ $petarawanbencana->foto }}"id="foto"
                                            class="form-control  @error('foto') is-invalid @enderror">
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

