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
        Schema::create('kos_photos', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('kos_id')->unique();
            // $table->foreign('kos_id')->references('id')->on('koss')->onDelete('cascade');
            $table->string('front_photos')->nullable();
            $table->string('interior_photos')->nullable();
            $table->string('street_photos')->nullable();
            $table->string('front_room_photos')->nullable();
            $table->string('interior_room_photos')->nullable();
            $table->string('bathroom_photos')->nullable();
            $table->string('additional_room_photos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kos_photos');
    }
};
