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
        Schema::create('promotion_service', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('promotion_id')->constrained()->onDelete('cascade');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->timestamps(); 
            
            $table->unique(['promotion_id', 'service_id']);
             $table->softDeletes(); // ¡Añade esto!
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_service');
    }
};