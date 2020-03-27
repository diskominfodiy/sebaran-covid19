<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateMasterDataDiyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_data_diy', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal_input', 255);
            $table->string('kode', 255);
            $table->string('status', 255);
            $table->string('umur', 255);
            $table->string('kelurahan', 255);
            $table->string('kecamatan', 255);
            $table->string('kab', 255);
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
        Schema::dropIfExists('master_data_diy');
    }
}
