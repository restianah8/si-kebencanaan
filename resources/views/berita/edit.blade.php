@extends('layout.template')

@section('title')
   edit Data berita
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>edit Data berita</h1>
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
                              <form action=" {{ route('berita.update',  $berita->id)}}" method="post" novalidate="novalidate">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="judul">judul:</label>
                                    <input type="text" name="judul" value="{{ $berita->judul }}"
                                    id="judul" class="form-control" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="isi">isi:</label>
                                    <input type="text" name="isi" value="{{ $berita->isi }}"
                                    id="isi" class="form-control" required="required">
                                </div>

                                <div class="form-group text-right">
                                    <input type="submit" value="simpan Data" class="btn btn-primary">
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
