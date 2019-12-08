<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios',function (Blueprint $table) {
            $table->string('nombre-usuario')->unique();
            $table->string('pass');
            $table->string('email')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('fecha-nac');
            $table->string('provincia');
            $table->integer('cp', 4);
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
        //Schema::table('users',function (Blueprint $table) {
        //   $table->dropColumn('name');
        // $table->dropColumn('password');
        //});
    }
}
