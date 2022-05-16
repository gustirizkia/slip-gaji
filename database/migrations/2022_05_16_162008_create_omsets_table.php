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
        Schema::create('omsets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('harga_jual');
            $table->bigInteger('modal');
            $table->bigInteger('untung');
            $table->bigInteger('rugi');
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
        Schema::dropIfExists('omsets');
    }
};
