<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peringatan extends Model
{
    use HasFactory;

    public $table ='peringatan';
    protected $fillable = [
        'id', 'nama','lokasi','penyebab','tanggal','jam','status','keterangan'
    ];
}
