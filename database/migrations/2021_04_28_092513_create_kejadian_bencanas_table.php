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
            $table->date('tanggal_kejadian');
            $table->time('waktu_kejadian');
            $table->string('lokasi', 60);
            $table->string('kronologis', 200);
            $table->string('akibat', 60);
            $table->unsignedBigInteger('id_kabupaten')->nullable();
            $table->string('penyebab', 60);
            $table->text('keterangan');
            $table->double('taksir_kerugian', 10,2);

            $table->timestamps();

            $table->foreign('id_jenis_bencana')->references('id')->on('jenis_bencana')
            ->onUpdate('no action')
            ->onDelete('cascade');
            $table->foreign('id_kabupaten')->references('id')->on('kabupaten')
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
