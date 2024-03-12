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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //$table->text('notes')->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->string('password');
            $table->string('email');
            $table->unsignedBigInteger('role_id');
            $table->timestamps();

            // Foreign key relationship (de ser necesaria)
            // $table->foreign('role_id')->references('id')->on('roles');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test');
    }
};
