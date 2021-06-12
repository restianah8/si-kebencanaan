<?php

namespace App\Exports;

use App\models\Kejadian_bencana;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Kejadian_bencanaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kejadian_bencana::all();
    }
    public function headings():array
    {
        return[
            'no','id_kabupaten','id_kecamatan','id_kelurahan','id_jenis_bencana','tanggal','waktu','lokasi','jumlah','meninggal','hilang','luka_luka','mengungsi','terdampak','rumah_RB','rumah_RR','rumah_RS','rumah_terendam','fasilitas_pendidikan','fasilitas_peribadatan','fasilitas_perkantoran','fasilitas_kesehatan','jembatan','hutan','lahan','sawah','kebun','luas_kerusakan','penyebab','upaya','keterangan','taksir_kerugian'
        ];

    }
}
