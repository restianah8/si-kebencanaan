@extends('layouts.public')
@section('title', 'Informasi Bencana')

@section('content')

    <section id="contact" class="contact mt-5">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <p>Informasi Bencana</p>
            </header>

            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-condensed table-bordered">
                            <thead class="thead-dark">
                                <th>no</th>
                                <th>kabupaten</th>
                                <th>nama bencana</th>
                                <th>Tanggal </th>
                                <th>Waktu </th>
                                <th> Lokasi </th>
                                <th>keterangan</th>
                                <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kejadian_bencana as $item)

                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->kabupaten->nama }}</td>
                                        <td>{{ $item->jenis_bencana->nama }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->waktu }}</td>
                                        <td>{{ $item->lokasi }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('info_bencana.show', $item->id) }}"
                                                class="btn btn-sm btn-info text-white">
                                                <i class="fa fa-eye"></i>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
