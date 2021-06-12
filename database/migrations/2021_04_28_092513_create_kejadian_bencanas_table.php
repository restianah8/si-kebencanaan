<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateKejadianBencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kejadian_bencana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kabupaten')->nullable();
            $table->unsignedBigInteger('id_kecamatan')->nullable();
            $table->unsignedBigInteger('id_kelurahan')->nullable();
            $table->unsignedBigInteger('id_jenis_bencana')->nullable();
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('lokasi',40);
            $table->string('jumlah',10);
            $table->string('meninggal',10);
            $table->string('hilang',10);
            $table->string('luka_luka', 10);
            $table->string('mengungsi', 10);
            $table->string('terdampak', 10);
            $table->string('rumah_RB', 10);
            $table->string('rumah_RR', 10);
            $table->string('rumah_RS',10);
            $table->string('rumah_terendam',20);
            $table->string('fasilitas_pendidikan',20);
            $table->string('fasilitas_peribadatan',20);
            $table->string('fasilitas_perkantoran',20);
            $table->string('fasilitas_kesehatan',20);
            $table->string('jembatan',10);
            $table->string('hutan',10);
            $table->string('lahan',10);
            $table->string('sawah',10);
            $table->string('kebun',10);
            $table->string('luas_kerusakan',10);
            $table->string('penyebab',100);
            $table->string('upaya',100);
            $table->string('keterangan',200);
            $table->double('taksir_kerugian',10,2);

            $table->timestamps();

            $table->foreign('id_jenis_bencana')->references('id')->on('jenis_bencana')
            ->onUpdate('no action')
            ->onDelete('cascade');

            $table->foreign('id_kabupaten')->references('id')->on('kabupaten')
            ->onUpdate('no action')
            ->onDelete('set null');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatan')
            ->onUpdate('no action')
            ->onDelete('set null');
            $table->foreign('id_kelurahan')->references('id')->on('kelurahan')
            ->onUpdate('no action')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kejadian_bencana');
    }
}
