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
            $table->string('no_surat');
            $table->bigInteger('warga_id');
            $table->bigInteger('kartu_keluarga_id');
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
