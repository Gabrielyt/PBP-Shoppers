<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_users', function (Blueprint $table) {
            $table->bigIncrements('id_cart');
            $table->string('id_user');
            $table->string('id_barang');
            $table->string('nama');
            $table->string('jumlah');
            $table->integer('harga');
            $table->integer('total');
            $table->string('foto');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_users');
    }
}
