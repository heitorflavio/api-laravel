<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->float('preco');
            $table->integer('quantidade');
            $table->string('categoria');
            $table->string('foto');
            $table->string('marca');
            $table->string('modelo');
            $table->string('cor');
            $table->string('tamanho');
            $table->string('peso');
            $table->string('tipo');
            $table->integer('status');
            $table->string('alterado_por');
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
        Schema::dropIfExists('produtos');
    }
}
