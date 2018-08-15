<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->increments('id_servico');
            $table->string('titulo');
            $table->string('descricao');
            $table->double('valor');
            $table->integer('atende_qtde_pessoas');
            $table->integer('id_tipo_servico')->unsigned();            
            $table->foreign('id_tipo_servico')->references('id_tipo_servico')->on('tipo_servicos');
            $table->integer('id_prestador_de_servicos')->unsigned();            
            $table->foreign('id_prestador_de_servicos')->references('id_prestador_de_servicos')->on('prestador_de_servicos');
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
        Schema::dropIfExists('servicos');
    }
}
