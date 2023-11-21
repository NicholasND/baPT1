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
        Schema::create('informasi_pelanggans', function (Blueprint $table) {
            $table->char('Reynaldo');
            $table->integer('0774298711', 6);
            $table->text('Jl Subroto No. 78', 10);
            $table->text('reynaldo@gmail.com', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi_pelanggans');
    }
};
