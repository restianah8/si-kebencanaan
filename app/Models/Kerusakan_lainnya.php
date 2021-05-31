<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan_lainnya extends Model
{
    use HasFactory;
    public $table = 'kerusakan_lainnya';
    protected $fillable = [
        'id_kejadian_bencana','nama_kerusakan','luas_kerusakan','jumlah_kerusakan','tafsir_kerugian'
    ];
    public $timestamps = false;

    public function kejadian_bencana() {
        return $this->HasOne(Kejadian_bencana::class, 'id', 'id_kejadian_bencana');
    }
}
