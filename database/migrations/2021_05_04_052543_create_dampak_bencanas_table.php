<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDampakBencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dampak_bencana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jenis_bencana')->nullable();
            $table->string('nama',70);

            $table->foreign('id_jenis_bencana')->references('id')->on('jenis_bencana')
            ->onUpdate('no action')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dampak_bencana');
    }
}
