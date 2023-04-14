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
        Schema::create('datadosens', function (Blueprint $table) {
            $table->id('iddosen');
            $table->string('nama');
            $table->string('pengampu_praktek');
            $table->string('pengampu_kelas');
            $table->string('jumlahsks');
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
        Schema::dropIfExists('datadosens');
    }
};
