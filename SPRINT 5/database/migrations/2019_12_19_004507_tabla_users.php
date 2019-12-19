<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('nombre', 255);
            $table->string('apellido', 255);
            $table->string('fecha_nac');
            $table->string('provincia');
            $table->string('localidad');
            $table->string('cp');
            $table->string('direccion');
            $table->timestamps();
            $table->string('image', 255);

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
