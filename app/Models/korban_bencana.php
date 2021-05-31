<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class korban_bencana extends Model
{
    use HasFactory;
    use HasFactory;
    public $table = 'korban_bencana';
    protected $fillable = [
        'id_kejadian_bencana','id_dampak_bencana','laki_laki','perempuan','jumlah'
    ];
    public $timestamps = false;

    public function kejadian_bencana() {
        return $this->HasOne(Kejadian_bencana::class, 'id', 'id_kejadian_bencana');
    }
    public function dampak_bencana() {
        return $this->HasOne(Dampak_bencana::class, 'id', 'id_dampak_bencana');
}
}
