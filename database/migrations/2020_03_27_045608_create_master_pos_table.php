<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateMasterPosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_pos', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_pos');
            $table->string('kelurahan', 255);
            $table->string('kecamatan', 255);
            $table->string('jenis', 255);
            $table->string('kabupaten', 255);
            $table->string('provinsi', 255);
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
        Schema::dropIfExists('master_pos');
    }
}
