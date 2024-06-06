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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->unsignedBigInteger('sub_categoria_id')->nullable();
            $table->unsignedBigInteger('public_target_id')->nullable();
            $table->json('urls_imagenes')->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->timestamps();

            $table->foreign('sub_categoria_id')->references('id')->on('sub_categorias');
            $table->foreign('public_target_id')->references('id')->on('public_target');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
