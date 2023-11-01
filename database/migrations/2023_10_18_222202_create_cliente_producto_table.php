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
        Schema::create('cliente_producto', function (Blueprint $table) {
            $table->foreignId('cliente_id')->references('id')->on('clientes');
            $table->foreignId('producto_id')->references('id')->on('productos');
            //$table->unsignedBigInteger('producto_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_producto');
    }
};
