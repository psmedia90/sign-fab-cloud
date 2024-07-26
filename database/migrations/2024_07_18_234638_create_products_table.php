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
            $table->text('sku');
            $table->integer('vendor_sku')->nullable();
            $table->text('name');
            $table->text('description')->nullable();
            $table->text('size')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('qoh')->nullable();
            $table->integer('upc')->nullable();
            $table->text('measurements')->nullable();
            $table->integer('cost_id')->nullable();
            $table->text('image')->nullable();
            $table->timestamps();

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
