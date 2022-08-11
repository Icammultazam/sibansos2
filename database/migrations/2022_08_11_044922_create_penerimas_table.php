<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimas', function (Blueprint $table) {
            $table->id();
            $table->string('NAMA');
            $table->string('TEMPAT_LAHIR');
            $table->date("TGL_LAHIR");
            $table->string('ALAMAT');
            $table->string('PEKERJAAN');
            $table->integer('NOKK');
            $table->integer('NIK');
            $table->integer('NOKKS');
            $table->string('KET');
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
        Schema::dropIfExists('penerimas');
    }
}
