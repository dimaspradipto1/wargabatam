<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();

            // $table->bigInteger('kartukeluarga_id');
            $table->foreignId('kartukeluarga_id')->constrained('kartukeluargas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger('warga_id');
            $table->string('status_hubungan');

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
        Schema::dropIfExists('anggotas');
    }
}
