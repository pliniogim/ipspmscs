<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ativos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fabricante');
            $table->string('contato');
            $table->string('telefone');
            $table->string('modelo');
            $table->date('ano');
            $table->string('nserie');
            $table->string('descricao');
            $table->string('aplicacao');
            $table->string('enderecoip');
            $table->string('local');
            $table->string('responsavel');
            $table->string('usuario');
            $table->string('senha');
            $table->string('protocolo1');
            $table->string('protocolo2');
            $table->string('protocolo3');
            $table->date('emoperacao');
            $table->date('garantia');
            $table->string('versaosoftware');
            $table->string('hardware');
            $table->string('memoria');
            $table->string('processador');
            $table->integer('nprocessadores');
            $table->integer('portas');
            $table->string('descportas');
            $table->string('observacoes');
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
        Schema::dropIfExists('ativos');
    }
}
