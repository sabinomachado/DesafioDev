<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cpf');
            $table->string('nome');
            $table->string('email');
            $table->integer('rg');
            $table->date('dt_nascimento');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('complemento')->nullable();;
            $table->string('bairro');
            $table->string('municipio');
            $table->unsignedinteger('uf');
            $table->integer('cep');
            $table->string('telefone');
            $table->string('celular');
            $table->string('sexo');
            $table->timestamps();
            $table->foreign('uf')->references('id')->on('estados');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
