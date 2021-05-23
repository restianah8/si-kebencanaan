@extends('layout.template')

@section('title')
    Data Kabupaten
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Kabupaten</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right mt-2">
            <a href="/dashboard/data_kabupaten/tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Kabupaten</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nama</th>
                          <th scope="col"></th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($kabupaten as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->nama }}</td>
                        <td class="text-right">
                            <a href="/dashboard/data_kabupaten/edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                            <a href="/dashboard/data_kabupaten/hapus/{{ $item->id }}" class="btn btn-danger">Hapus</a>
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
</div>

@endsection
