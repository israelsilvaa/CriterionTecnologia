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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marca_id')->constrained()->cascadeOnDelete();

            $table->string('nome_modelo', 20);
            $table->string('nome_produto', 100);
            
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('capacidade_id');
            $table->unsignedBigInteger('velocidade_id');
            $table->unsignedBigInteger('aplicacao_id');
            $table->unsignedBigInteger('geracao_id');
            $table->float('preco', 8, 2);
            $table->timestamps();
            
            //contraint
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('capacidade_id')->references('id')->on('capacidades');
            $table->foreign('velocidade_id')->references('id')->on('velocidades');
            $table->foreign('aplicacao_id')->references('id')->on('aplicacoes');
            $table->foreign('geracao_id')->references('id')->on('geracoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
