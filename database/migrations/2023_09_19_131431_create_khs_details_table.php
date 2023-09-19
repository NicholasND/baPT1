<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khs_details', function (Blueprint $table) {
            $table->char('kode_khs_detail', 8);
            $table->char('kode_khs', 8);
            $table->id('matakuliah: matakuliah');
            $table->tinyInteger('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khs_details');
    }
};
