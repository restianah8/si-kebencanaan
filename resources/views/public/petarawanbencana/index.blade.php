@extends('layouts.public')
@section('title', 'Peta rawan bencana')

@section('content')
    <section id="contact" class="contact mt-5">

        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>Peta rawan bencana</p>
            </header>

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
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
