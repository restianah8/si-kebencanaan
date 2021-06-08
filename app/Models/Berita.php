<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Berita extends Model implements HasMedia
{
    use HasFactory, HasMediaTrait;
    public $table = 'berita';
    protected $fillable = [
        'id', 'judul','isi'
    ];
}
