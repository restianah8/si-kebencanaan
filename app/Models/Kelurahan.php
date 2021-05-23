<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    public $table = 'kelurahan';
    public $timestamps = false;

    public function kecamatan() {
        return $this->HasOne(Kecamatan::class, 'id', 'id_kecamatan');
    }
}
