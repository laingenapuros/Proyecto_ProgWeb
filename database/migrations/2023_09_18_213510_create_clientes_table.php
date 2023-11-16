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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('producto_id');
            //$table->foreignId('producto_id')->constrained();
            //$table->foreignId('producto_id')->references('id')->on('productos');
            $table -> string('nombre');
            $table -> string('cantidad');
            $table -> string('telefono');
            $table -> string('producto_men');
            $table -> string('archivo_ubicacion');
            $table -> string('archivo_nombre');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
