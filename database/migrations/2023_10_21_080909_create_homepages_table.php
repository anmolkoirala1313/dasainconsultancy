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
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('button')->nullable();
            $table->string('link')->nullable();
            $table->string('video')->nullable();
            $table->string('image_position')->default('left')->nullable();
            $table->string('action_title')->nullable();
            $table->string('action_subtitle')->nullable();
            $table->string('action_button')->nullable();
            $table->string('action_link')->nullable();
            $table->string('action_image')->nullable();
            $table->additionalColumns();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepages');
    }
};
