<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kejadian_bencana extends Model
{
    use HasFactory;
    public $table = 'kejadian_bencana';
    protected $fillable = [
        'id_jenis_bencana','id_kabupaten','id_kecamatan','id_kelurahan','tanggal','waktu','lokasi','akibat','penyebab','kronologis','keterangan'
    ];
    public $timestamps = false;


    public function jenis_bencana() {
        return $this->HasOne(jenis_bencana::class, 'id', 'id_jenis_bencana');
    }
        public function kabupaten() {
            return $this->HasOne(Kabupaten::class, 'id', 'id_kabupaten');
        }
        public function kecamatan() {
            return $this->HasOne(Kecamatan::class, 'id', 'id_kecamatan');
        }
            public function kelurahan() {
                return $this->HasOne(Kelurahan::class, 'id', 'id_kelurahan');
         }
}
