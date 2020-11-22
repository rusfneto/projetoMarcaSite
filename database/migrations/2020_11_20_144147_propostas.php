<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Propostas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propostas', function (Blueprint $table) {
            $table->id();
            $table->string('listcliente');
            $table->string('enderecodaobra');
            $table->string('tiposervico');
            $table->string('propostaem');
            $table->string('valortotal');
            $table->string('valorsinal');
            $table->string('qtdparcelas');
            $table->string('valorparcelas');
            $table->string('datainiciopg');
            $table->string('dataparcelas');
            $table->string('arquivo');
            $table->string('status');
            $table->string('criadapor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propostas');
    }
}
