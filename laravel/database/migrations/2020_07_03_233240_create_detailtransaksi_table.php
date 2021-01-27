<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailtransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtransaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_penjualan')->unsigned();;
            $table->integer('id_customer')->unsigned();;
            $table->date('tanggal');
            $table->integer('point');
            $table->integer('total');
            $table->timestamps();

            $table->foreign('id_penjualan')->references('id')->on('penjualanbarang');
            $table->foreign('id_customer')->references('id')->on('detailtransaksi');
           
        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtransaksi');
    }
}
