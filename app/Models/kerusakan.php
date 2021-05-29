<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kerusakan extends Model
{
    use HasFactory;
    public $table = 'kerusakan';
    protected $fillable = [
        'id_kejadian_bencana','id_dampak_bencana','RB','RS','RR'
    ];
    public $timestamps = false;

    public function kejadian_bencana() {
        return $this->HasOne(Kejadian_bencana::class, 'id', 'id_kejadian_bencana');
    }
    public function dampak_bencana() {
        return $this->HasOne(Dampak_bencana::class, 'id', 'id_dampak_bencana');
    }
}
