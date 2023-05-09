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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedBigInteger('category_id');
            $table->longText('description');
            $table->double('price');
            $table->double('calories')->nullable();
            $table->double('fat')->nullable();
            $table->double('protein')->nullable();
            $table->double('carbohydrates')->nullable();
            $table->double('fibre')->nullable();
            $table->double('salt')->nullable();
            $table->double('weight');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
