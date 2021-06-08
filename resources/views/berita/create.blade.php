@extends('layout.template')

@section('title')
    Tambah Data berita
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data berita</h1>
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
                              <form action="{{ route('berita.tambah') }}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                                @csrf

                                <div class="form-group">
                                    <label for="judul">judul:</label>
                                    <input type="text" name="judul" id="judul" class="form-control" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" id="foto" class="form-control" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="isi">isi:</label>
                                    <textarea name="isi" id="isi" class="form-control" required="required"></textarea>
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
