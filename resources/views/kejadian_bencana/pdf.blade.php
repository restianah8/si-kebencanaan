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
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>


	<table class='table table-bordered'>
		<thead>
			<tr>
				<tr>
                    <th>id</th>
                    <th>id_kabupaten</th>
                    <th>id_kecamatan</th>
                    <th>id_kelurahan</th>
                    <th>id_jenis_bencana</th>
                    <th>Tanggal </th>
                    <th>Waktu </th>
                    <th> Lokasi_kejadian </th>
                    <th>jumlah</th>
                    <th>korban_meninggal</th>
                    <th>korban_hilang</th>
                    <th>korban_lukaluka</th>
                    <th>korban_mengungsi</th>
                    <th>korban_terdampak</th>
                    <th>rumah_RB</th>
                    <th>rumah_RR</th>
                    <th>rumah_RS</th>
                    <th>Rumah_Terendam</th>
                    <th>fasilitas_pendidikan</th>
                    <th>fasilitas_ibada</th>
                    <th>fasilitas_perkantoran</th>
                    <th>fasilitas_kesehatan</th>
                    <th>jembatan</th>
                    <th>hutan</th>
                    <th>lahan</th>
                    <th>sawah</th>
                    <th>kebun</th>
                    <th>luas_kerusakan</th>
                    <th>penyebab</th>
                    <th>upaya</th>
                    <th>keterangan</th>
                    <th>taksir_kerugian</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($kejadian_bencana as $item)

                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->kabupaten->nama }}</td>
                        <td>{{ $item->kecamatan->nama }}</td>
                        <td>{{ $item->kelurahan->nama }}</td>
                        <td>{{ $item->jenis_bencana->nama }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->waktu }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->meninggal }}</td>
                        <td>{{ $item->hilang }}</td>
                        <td>{{ $item->luka_luka }}</td>
                        <td>{{ $item->mengungsi }}</td>
                        <td>{{ $item->terdampak }}</td>
                        <td>{{ $item->rumah_RB }}</td>
                        <td>{{ $item->rumah_RR }}</td>
                        <td>{{ $item->rumah_RS }}</td>
                        <td>{{ $item->rumah_terendam }}</td>
                        <td>{{ $item->fasilitas_pendidikan }}</td>
                        <td>{{ $item->fasilitas_peribadatan }}</td>
                        <td>{{ $item->fasilitas_perkantoran }}</td>
                        <td>{{ $item->fasilitas_kesehatan }}</td>
                        <td>{{ $item->jembatan }}</td>
                        <td>{{ $item->hutan }}</td>
                        <td>{{ $item->lahan }}</td>
                        <td>{{ $item->sawah }}</td>
                        <td>{{ $item->kebun }}</td>
                        <td>{{ $item->luas_kerusakan }}</td>
                        <td>{{ $item->penyebab }}</td>
                        <td>{{ $item->upaya }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ number_format($item->taksir_kerugian, 2, ',', '.') }}</td>

			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
