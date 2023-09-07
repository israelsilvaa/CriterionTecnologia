<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('imagens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modelo_id');
            $table->string('imagem_card');
            $table->string('imagem_1')->nullable()->default('null');
            $table->string('imagem_2')->nullable()->default('null');
            $table->string('imagem_3')->nullable()->default('null');
            $table->string('imagem_4')->nullable()->default('null');
            $table->timestamps();

            //constranit
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->unique('modelo_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagens');
    }
};
