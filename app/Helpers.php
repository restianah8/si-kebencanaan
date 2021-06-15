<?php

use App\Models\Kejadian_bencana;

if ( ! function_exists('dataBencana'))
{
    function dataBencana($jenis)
    {
        $months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];

        $data = [];
        $n = 0;
        foreach ($months as $mo) {
            $data[$n] = Kejadian_bencana::whereMonth('tanggal', '=', $mo)->where('id_jenis_bencana', $jenis)->count();

            $n++;
        }

        return $data;
    }
}
