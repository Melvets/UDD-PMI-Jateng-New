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
        Schema::create('stokdarah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alamatudd_id');
            $table->integer('golda_a');
            $table->integer('golda_b');
            $table->integer('golda_ab');
            $table->integer('golda_o');
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
        Schema::dropIfExists('stokdarah');
    }
};
