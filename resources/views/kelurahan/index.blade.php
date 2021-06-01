
@extends('layout.template')
@section('title')
    Data Kelurahan
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Kelurahan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right mt-2">
            <a href="/dashboard/kelurahan/tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                  <th>id</th>
                <th>Kecamatan</th>
                <th>kelurahan/Desa</th>
                <th>Aksi</th>
              </tr>
              @php
              $no = '1'
               @endphp
              @foreach ($kelurahan as $item)
              <tbody>

                <tr>
                  <td>{{$no++}}</td>
                  <td>{{ $item->kecamatan->nama }}</td>
                  <td>{{$item->nama}}</td>
                    <td>
                   
                    <a href="/dashboard/kelurahan/edit/{{ $item->id }}" class=" mb-2 fa fa-edit bg-warning p-2 text-white rounded"></a>
                    <a href="/dashboard/kelurahan/hapus/{{ $item->id }}" onclick="return confirm('Yakin Ingin Menghapus Data')" class=" mb-2 fa fa-trash bg-danger p-2 text-white rounded"></a>
                </td>

              </tr>
            </tbody>
            @endforeach
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection




