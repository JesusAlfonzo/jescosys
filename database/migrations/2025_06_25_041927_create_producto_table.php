<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->integer('stock')->default(0);
            
            // Claves foráneas
            $table->foreignId('categoria_id')
                ->constrained('categorias')
                ->onDelete('cascade');
                
            $table->foreignId('marca_id')
                ->constrained('marcas')
                ->onDelete('cascade');
                
            $table->foreignId('presentacion_id')
                ->constrained('presentaciones')
                ->onDelete('cascade');
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
