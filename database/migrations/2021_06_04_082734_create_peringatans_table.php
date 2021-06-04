<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeringatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peringatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('lokasi');
            $table->string('penyebab');
            $table->date('tanggal');
            $table->time('jam');
            $table->string('Status');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peringatan');
    }
}
