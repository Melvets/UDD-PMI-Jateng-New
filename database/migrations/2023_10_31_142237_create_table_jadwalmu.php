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
        Schema::create('jadwalmu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alamatudd_id');
            $table->string('tempat');
            $table->string('alamat');
            $table->string('kabkot');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->date('tanggal');
            $table->string('peruntukan');
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
        Schema::dropIfExists('jadwalmu');
    }
};
