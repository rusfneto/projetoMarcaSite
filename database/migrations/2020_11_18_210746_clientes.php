<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('razaosocial');
            $table->string('nomefantasia');
            $table->string('cnpj')->unique();
            $table->string('endereco');
            $table->string('email');
            $table->string('telefone');
            $table->string('responsavel');
            $table->string('cpf');
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
        Schema::dropIfExists('clientes');
    }
}
