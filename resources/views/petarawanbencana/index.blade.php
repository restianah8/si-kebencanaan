@extends('layout.template')
@section('title')
    peta rawan bencana
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>peta rawan bencana</h1>
            </div>
        </div>
    </div>
    </div>
        <div class="col-sm-12">
        <div class="page-header float-right mt-2">
        <a href="{{ route('peta.tambah')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
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
                <th>Nama peta</th>
                <th>Diskripsi</th>
                <th>peta</th>
                <th>Aksi</th>
              </tr>
              <tbody>
              @foreach ($petarawanbencana as $item)
                <tr>
                    <td>{{ ($loop->index + 1) }}</td>
                    <td>{{$item->nama_peta}}</td>
                    <td>{{$item->diskripsi}}</td>
                    <td>
                        @isset($item->media[0])
                    <img src="{{ $item->media[0]->getFullUrl() }}" class="img-fluid">
                @else
                    Tidak ada foto
                @endisset
                    </td>
                <td>

                    <a href="/dashboard/jenis_bencana/edit/{{ $item->id }}" class=" mb-2 fa fa-edit bg-warning p-2 text-white rounded"></a>
                    <a href="/dashboard/jenis_bencana/hapus/{{ $item->id }}" onclick="return confirm('Yakin Ingin Menghapus Data')"
                        class=" mb-2 fa fa-trash bg-danger p-2 text-white rounded"></a>
                </td>
              </tr>

            @endforeach
        </tbody>
          </table>
                </div>
            </div>
        </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection



