<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToPeringatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peringatan', function (Blueprint $table) {
            $table->string('flag_level',2)->after('keterangan');
            $table->boolean('flag_status',2)->after('flag_level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peringatan', function (Blueprint $table) {
            //
        });
    }
}
