<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    public $table = 'kecamatan';

    protected $fillable = [
         'id', 'nama'
     ];

    public $timestamps = false;

    public function kabupaten()
    {
        return $this->hasMany(Kabupaten::class);
    }

    public function kelurahan() {
        //keluarahn di kecamatan tertentu
        return $this->hasMany(Kelurahan::class);
    }
}
