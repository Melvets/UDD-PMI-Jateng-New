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
        Schema::create('pendonor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alamatudd_id');
            $table->foreignId('user_id');
            $table->bigInteger('no_ktp');
            $table->string('no_piagam');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->enum('jk', ['Laki-Laki', 'Perempuan']);
            $table->string('agama');
            $table->string('no_telepon');
            $table->string('pekerjaan');
            $table->string('golda');
            $table->integer('jumlah_donasi');
            $table->date('donor_pertama');
            $table->integer('piagam_ke');
            $table->date('tanggal_piagam');
            $table->boolean('status');
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
        Schema::dropIfExists('pendonor');
    }
};
