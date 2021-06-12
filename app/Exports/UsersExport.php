<?php

namespace App\Exports;

use App\models\Kejadian_bencana;
use Maatwebsite\Excel\Concerns\FromCollection;


class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kejadian_bencana::all();
    }
}
