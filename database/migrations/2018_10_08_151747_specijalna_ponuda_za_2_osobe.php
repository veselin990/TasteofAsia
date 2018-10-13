<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpecijalnaPonudaZa2Osobe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menis', function (Blueprint $table) {
            $table->integer('za_dve_osobe')->nullable();
            $table->integer('za_cetiri_osobe')->nullable();
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
            $table->dropColumn('za_dve_osobe');
            $table->dropColumn('za_cetiri_osobe');
        });
    }
}
