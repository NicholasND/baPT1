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
        Schema::create('daftar_produks', function (Blueprint $table) {
            $table->char('Nama description', 10);
            $table->quantity('300.000 units', 6);
            $table->quantity('11,950.00');
            $table->integer('Taxes 11%');
            $table->amount('Rp 22,840,000.00', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftar_produks');
    }
};
