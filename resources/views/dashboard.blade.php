@extends('layout.template')

@section('title')
     Dashboard
@endsection

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Selamat Datang di halaman dashboard</h1>
            </div>
        </div>
    </div>
</div>

<figure class="highcharts-figure">
    <div id="container"></div>
</figure>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
Highcharts.chart('container', {

    title: {
        text: 'grafik kejadian bencana'
    },


    yAxis: {
        title: {
            text: 'Jumlah Kejadian'
        }
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    series: [
    @foreach ($jenis_bencana as $jenis)
    {
        name: '{{ $jenis->nama }}',
        data: [
            @foreach (dataBencana($jenis->id) as $data)
                {{ $data }},
            @endforeach
        ]
    },
    @endforeach
       ],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
</script>
@endsection
