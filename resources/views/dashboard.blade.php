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
    <p class="highcharts-description">
        Basic line chart showing trends in a dataset. This chart includes the
        <code>series-label</code> module, which adds a label to each line for
        enhanced readability.
    </p>
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
            text: 'Number of Employees'
        }
    },

    xAxis: {
        accessibility: {
            rangeDescription: 'Range: 2010 to 2017'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        name: 'Banjir',
        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
    }, {
        name: 'Tanah Longsor',
        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
    }, {
        name: 'Gempa',
        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
    }, {
        name: 'Kebakaran',
        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
    }, {
        name: 'angin Puting Beliung',
        data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
    }],

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
