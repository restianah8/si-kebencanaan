<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dampak_bencana extends Model
{
    use HasFactory;
    public $table = 'dampak_bencana';
    public $timestamps = false;

    public function jenis_bencana() {
        return $this->HasOne(jenis_bencana::class, 'id', 'id_jenis_bencana');
}
}
