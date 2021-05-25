<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerusakanLainnyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerusakan_lainnya', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kejadian_bencana')->nullable();
            $table->string('nama_kerusakan',20);
            $table->string('luas_kerusakan', 10);
            $table->string('jumlah_kerusakan', 10);
            $table->string('tafsir_kerugian', 10);

            $table->foreign('id_kejadian_bencana')->references('id')->on('kejadian_bencana')
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
        Schema::dropIfExists('kerusakan_lainnya');
    }
}
