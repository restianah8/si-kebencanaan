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
            $table->unsignedBigInteger('id_jenis_bencana')->nullable();
            $table->unsignedBigInteger('id_kabupaten')->nullable();
            $table->unsignedBigInteger('id_kecamatan')->nullable();
            $table->unsignedBigInteger('id_kelurahan')->nullable();
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('lokasi', 60);
            $table->string('akibat', 60);
            $table->string('penyebab', 60);
            $table->string('kronologis', 200);
            $table->text('keterangan',200);
            $table->string('taksir_kerugian', 10,2);

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
