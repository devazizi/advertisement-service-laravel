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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->uuid(); # set uuid as advertisement ID
            $table->unsignedInteger('client_id')->index('client_id_index');
            $table->unsignedInteger('advertisement_category_id')->index('ad_category_idx');
            $table->string('name');
            $table->text('description');
            $table->enum('payment_type', [
                'AGREED_PRICE', 'FIXED', 'EXCHANGE'
            ]);
            $table->unsignedInteger('price')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
