<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratpengantarrtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratpengantarrts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_surat');
            $table->string('nama_rt');
            $table->string('nama_rw');
            $table->bigInteger('warga_id');
            $table->string('warga_nama');
            $table->bigInteger('keperluan_id');
            
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
        Schema::dropIfExists('suratpengantarrts');
    }
}
