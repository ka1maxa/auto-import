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
       Schema::create('cars', function (Blueprint $table) 
       {
            $table->id();
            $table->foreignId('dealer_id')->nullable()->constrained()->nullOnDelete();
            $table->string('vin', 17)->nullable()->unique();
            $table->string('brand');
            $table->string('model');
            $table->unsignedSmallInteger('year');
            $table->decimal('price', 10, 2);
            $table->string('currency', 3)->default('USD');
            $table->unsignedInteger('mileage')->default(0);
            $table->enum('status', ['available', 'reserved', 'sold', 'pending'])->default('available');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['brand', 'model']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
