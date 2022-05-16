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
        Schema::create('penggajians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_karyawan');
            $table->string('jenis_kelamin');
            $table->string('jabatan');
            $table->string('gaji_pokok');
            $table->bigInteger('jam_lembur');
            $table->bigInteger('upah_lembur');
            $table->bigInteger('total_gaji');
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
        Schema::dropIfExists('penggajians');
    }
};
