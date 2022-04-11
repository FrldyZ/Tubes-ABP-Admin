<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_item');
            $table->date('tanggal_pemesanan');
            // $table->string('status');
            $table->string('username_pengguna',100);
            $table->foreign('username_pengguna')->references('username')->on('pengguna');
            $table->bigInteger('id_oleh')->unsigned();
            $table->foreign('id_oleh')->references('id')->on('oleh');
            $table->bigInteger('id_pembayaran')->unsigned();
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran');
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
        Schema::dropIfExists('pemesanan');
    }
};
