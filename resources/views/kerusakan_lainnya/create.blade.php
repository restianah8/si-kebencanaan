@extends('layout.template')

@section('title')
    Tambah Data kerusakan lainnya
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data kerusakan lainnya</h1>
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
                              <form action="/dashboard/kerusakan_lainnya/tambah" method="post" novalidate="novalidate">
                                @csrf

                                <div class="form-group">
                                    <label for="kejadian_bencana">kejadian_bencana:</label>
                                    <select name="id_kejadian_bencana" id="kejadian_bencana" class="form-control">
                                        @foreach ($kejadian_bencana as $item)
                                        <option value="{{ $item->id }}">{{ $item->id }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="nama_kerusakan">nama_kerusakan:</label>
                                    <input type="text" name="nama_kerusakan" id="nama_kerusakan" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="luas_kerusakan">luas_kerusakan:</label>
                                    <input type="text" name="luas_kerusakan" id="luas_kerusakan" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_kerusakan">jumlah_kerusakan:</label>
                                    <input type="text" name="jumlah_kerusakan" id="jumlah_kerusakan" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="tafsir_kerugian">tafsir_kerugian:</label>
                                    <input type="text" name="tafsir_kerugian" id="tafsir_kerugian" class="form-control" required="required">
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

