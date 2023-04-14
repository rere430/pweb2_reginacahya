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
        Schema::create('table_pengajuanbahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bhp');
            $table->string('nama_pengampu');
            $table->string('jenis_praktek');
            $table->string('volume');
            $table->string('jumlah');
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
        Schema::dropIfExists('table_pengajuanbahan');
    }
};
