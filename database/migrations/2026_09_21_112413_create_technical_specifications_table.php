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
        Schema::create('technical_specifications', function (Blueprint $table) 
        {
            $table->id();
            $table->foreignId('car_id')->unique()->constrained()->cascadeOnDelete();
            $table->decimal('engine_volume', 3, 1)->nullable();
            $table->string('fuel')->nullable();
            $table->string('transmission')->nullable();
            $table->string('drive')->nullable();
            $table->string('body_type')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_specifications');
    }
};
