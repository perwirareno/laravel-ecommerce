<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_reno_master_produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_polisi')->unique();
            $table->string('kode_unik');
            $table->integer('inorout')->comment('0=Masuk, 1=Keluar');
            $table->timestamp('jam_masuk');
            $table->timestamp('jam_keluar')->nullable();
            $table->integer('biaya');
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
        Schema::dropIfExists('tbl_reno_master_produk');
    }
}
