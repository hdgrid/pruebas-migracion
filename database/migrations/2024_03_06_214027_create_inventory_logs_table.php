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
        Schema::create('inventory_logs', function (Blueprint $table) {
            $table->id();
            //$table->text('notes')->nullable();
            $table->unsignedBigInteger('inventory_id');
            $table->integer('amount');
            $table->integer('delta_amount');
            $table->string('movement'); //maybe add CHECK constriant
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            // Commented out for relationships
            // $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade');
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_logs');
    }
};
