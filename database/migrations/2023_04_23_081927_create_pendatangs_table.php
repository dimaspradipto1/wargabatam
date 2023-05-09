<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendatangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendatangs', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('nik');
            $table->string('pendatang');
            $table->string('jenis_kelamin');
            $table->date('tanggal_datang');
            $table->bigInteger('warga_id');
            
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
        Schema::dropIfExists('pendatangs');
    }
}
