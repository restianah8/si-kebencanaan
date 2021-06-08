@extends('layouts.public')
@section('title', 'Peringatan Dini Bencana')

@section('content')
    <section id="contact" class="contact mt-5">

        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <p>Peringatan Dini Bencana</p>
            </header>

            <div class="row gy-4">
                <div class="col-lg-12">
                    @if (count($peringatan) > 0)
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed table-bordered">
                                <thead class="thead-dark">
                                    <th>nama-bencana</th>
                                    <th>lokasi-bencana</th>
                                    <th>penyebab</th>
                                    <th>tanggal</th>
                                    <th>jam</th>
                                    <th>status-bencana</th>
                                    <th>keterangan</th>
                                </thead>
                                <tbody>
                                    @foreach ($peringatan as $item)

                                        <tr>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->lokasi }}</td>
                                            <td>{{ $item->penyebab }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->jam }}</td>
                                            <td>
                                                @if ($item->flag_level == 1)
                                                    <span class="label label-success">
                                                    @elseif ($item->flag_level == 2)
                                                        <span class="label label-info">
                                                        @elseif ($item->flag_level == 3)
                                                            <span class="label label-warning">
                                                            @elseif ($item->flag_level == 4)
                                                                <span class="label label-danger">
                                                @endif

                                                {{ $item->Status }}
                                                </span>
                                            </td>
                                            <td>
                                                @if ($item->flag_level == 1)
                                                    <span class="label label-success">
                                                    @elseif ($item->flag_level == 2)
                                                        <span class="label label-info">
                                                        @elseif ($item->flag_level == 3)
                                                            <span class="label label-warning">
                                                            @elseif ($item->flag_level == 4)
                                                                <span class="label label-danger">
                                                @endif
                                                {{ $item->keterangan }}</span>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-info">
                            Tidak ada data untuk ditampilkan
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </section>
@endsection
