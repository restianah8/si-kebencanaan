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
            $table->unsignedBigInteger('id_jenis_kerusakan_lainnya')->nullable();;
            $table->string('luas kerusakan', 10);
            $table->string('jumlah kerusakan', 10);
            $table->string('tafsir kerugian', 10);

            $table->foreign('id_kejadian_bencana')->references('id')->on('kejadian_bencana')
            ->onUpdate('no action')
            ->onDelete('set null');
            $table->foreign('id_jenis_kerusakan_lainnya')->references('id')->on('jenis_kerusakan_lainnya')
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
