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
        Schema::create('inventarios_final', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo');
            $table->text('Descripcion');
            $table->decimal('Precio', 8, 2);
            $table->integer('Stock');
            $table->string('Categoria');
            $table->string('Foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios_final');
    }
};
