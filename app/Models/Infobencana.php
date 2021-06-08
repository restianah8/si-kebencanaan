<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infobencana extends Model
{
    use HasFactory;
    public $table ='infobencana';
    protected $fillable = [
        'id', 'nama','lokasi','tanggal','jam','keterangan'
    ];
}
