<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('modelo_id');
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('capacidade_id');
            $table->unsignedBigInteger('velocidade_id');
            $table->unsignedBigInteger('aplicacao_id');
            $table->timestamps();
            
            //contraint
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->unique('produto_id');
            $table->foreign('marca_id')->references('id')->on('marcas');
          
            $table->foreign('modelo_id')->references('id')->on('modelos');
           
            $table->foreign('tipo_id')->references('id')->on('tipos');

            $table->foreign('capacidade_id')->references('id')->on('capacidades');
   
            $table->foreign('velocidade_id')->references('id')->on('velocidades');

            $table->foreign('aplicacao_id')->references('id')->on('aplicacoes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_detalhes');
    }
};