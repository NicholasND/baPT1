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
        Schema::create('informasi_perusahaans', function (Blueprint $table) {
            $table->char('PT Kimia Farma Tbk', 10);
            $table->integer('0995321895', 6);
            $table->text('Jl Kampungbalai', 10);
            $table->text('KAMPUNGBALAI@gmail.com', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi_perusahaans');
    }
};
