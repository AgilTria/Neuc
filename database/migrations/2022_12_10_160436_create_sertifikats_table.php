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
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->bigIncrements('no_seri');
            $table->bigInteger('acara_id');
            $table->bigInteger('instansi_id');
            $table->bigInteger('peserta_id');
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
        Schema::dropIfExists('sertifikats');
    }
};
