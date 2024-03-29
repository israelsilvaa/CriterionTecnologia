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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->string('cliente', 100);
            $table->datetime('data_venda');
            $table->datetime('data_garantia');
            $table->float('preco_venda', 8, 2);
            $table->float('lucro', 8, 2);
            $table->mediumText('observacao');
            $table->timestamps();

            //constraint
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->unique('produto_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
