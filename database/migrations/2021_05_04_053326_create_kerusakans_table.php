<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerusakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerusakan', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_kejadian_bencana')->nullable();
                $table->unsignedBigInteger('id_dampak_bencana')->nullable();
                $table->string('RB', 10);
                $table->string('RS', 10);
                $table->string('RR', 10);
                $table->timestamps();

            $table->foreign('id_kejadian_bencana')->references('id')->on('kejadian_bencana')
            ->onUpdate('no action')
            ->onDelete('cascade');
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
        Schema::dropIfExists('kerusakan');
    }
}
