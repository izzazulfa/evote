<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datacalon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datacalon', function (Blueprint $kolom) {
            $kolom->increments('nourut');
            $kolom->string('idcalon');
            $kolom->string('nama');
            $kolom->string('foto');
            $kolom->string('tipe');
            $kolom->timestamps();
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
