@extends('layout.template')
@section('title')
    Data Kejadian Becana
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Kejadian Becana</h1>
            </div>
        </div>
    </div>
    </div>
        <div class="col-sm-12">
         <div class="page-header float-right mt-2">
        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
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
                <th>id_jenis bencana</th>
                <th>id_kabupaten</th>
                <th>Tanggal </th>
                <th>Waktu </th>
                <th>Lokasi</th>

                <th>Tksir Kerugian</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no = '1'
                @endphp
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

                <td>
                    <a href="" class=" mb-2 fa fa-eye bg-primary p-2 text-white rounded"></a>
                    <a href="" class=" mb-2 fa fa-edit bg-warning p-2 text-white rounded"></a>
                    <a href="" onclick="return confirm('Yakin Ingin Menghapus Data')" class=" mb-2 fa fa-trash bg-danger p-2 text-white rounded"></a>
                </td>
              </tr>

            </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection



