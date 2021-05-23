@extends('layout.template')

@section('title')
    Edit Data Kelurahan
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Data kelurahan</h1>
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
                              <form action="/dashboard/kelurahan/edit/{{ $kelurahan->id }}" method="post" novalidate="novalidate">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="id">Kecamatan:</label>
                                    <select name="id_kecamatan" id="id" class="form-control">
                                        @foreach ($kecamatan as $item)
                                        <option value="{{ $item->id }}" @if ($item->id == $kelurahan->id_kecamatan) selected="selected" @endif>{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama kelurahan:</label>
                                    <input type="text" name="nama" value="{{ $kelurahan->nama }}" id="nama" class="form-control" required="required">
                                </div>

                                <div class="form-group text-right">
                                    <input type="submit" value="Edit Data" class="btn btn-primary">
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

