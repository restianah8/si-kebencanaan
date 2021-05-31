<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKorbanBencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korban_bencana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kejadian_bencana')->nullable();
            $table->unsignedBigInteger('id_dampak_bencana')->nullable();
            $table->string('laki_laki',40);
            $table->string('perempuan', 50);
            $table->string('jumlah', 10);


            $table->foreign('id_kejadian_bencana')->references('id')->on('kejadian_bencana')
            ->onUpdate('no action')
            ->onDelete('set null');
            $table->foreign('id_dampak_bencana')->references('id')->on('dampak_bencana')
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
        Schema::dropIfExists('korban_bencana');
    }
}
