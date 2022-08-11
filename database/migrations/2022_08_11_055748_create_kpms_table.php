<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKpmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kpms', function (Blueprint $table) {
            $table->id();
            $table->string('NAMAKPM');
            $table->string('ALAMAT');
            $table->integer('NOKK');
            $table->integer('NIK');
            $table->integer('NOKKS');
            $table->string('STATUS');
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
        Schema::dropIfExists('kpms');
    }
}
