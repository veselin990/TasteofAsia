<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JelaKojaImajuPirinac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menis', function (Blueprint $table) {
            $table->integer('sa_pirincem')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menis', function (Blueprint $table) {
            $table->dropColumn('sa_pirincem');
        });
    }
}
