<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('foto');
            $table->string('ktp');
            //Status-
            $table->string('status')->nullable();
            // Tempat Lahir-
            $table->string('tempat_lahir')->nullable();
            // Tanggal Lahir-
            $table->date('tanggal_lahir')->nullable();
            //user_id
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
        });
        Schema::table('customers', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
