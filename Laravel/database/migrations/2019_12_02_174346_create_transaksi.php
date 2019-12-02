<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
          $table->bigIncrements('id');
            $table->string('id_user');
            $table->string('id_penjual');
            $table->string('id_barang');
            $table->string('nama_barang');
            $table->integer('jumlah_barang');
            $table->integer('total');
            $table->string('status');
            $table->string('no_pembelian');
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
        Schema::dropIfExists('transaksi');
    }
}
