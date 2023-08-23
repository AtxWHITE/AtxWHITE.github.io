<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // buat table order dengan kolom id customer yang beralsi dengan customer, layanan, tanggal & waktu pemesanan, daerah alamat dari user, status berisi enum batal, masuk

        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->integer('layanan');
            $table->dateTime('tanggal_pemesanan');
            $table->enum('status', ['batal', 'masuk']);
            $table->timestamps();
            //foreign key
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('restrict')->onUpdate('restrict');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
