<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('title', 255);
            $table->string('description');
            $table->timestamp('date');
            $table->timestamp('public_at');
            $table->string('main_image');
            $table->string('portrait_image')->nullable();

            $table->string('location', 255);
            $table->string('address');
            $table->string('country', 255);
            $table->string('state', 255);
            $table->string('city', 255);
            $table->string('postal_code', 6);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};