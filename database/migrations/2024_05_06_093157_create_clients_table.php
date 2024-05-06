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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cell_number')->unique();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->boolean('is_verified')->index('verification_idx');
            $table->timestamps();
            $table->index(['first_name', 'last_name'], 'name_idx');
            $table->index(['email', 'cell_number'], 'email_cell_number_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
