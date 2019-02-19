<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome')->nullable();
            $table->string('sobrenome')->nullable();
            $table->string('titulacao')->nullable();
            $table->integer('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->integer('id_user')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pessoas');
    }
}
