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
        Schema::create('banner_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('desc')->nullable();
            $table->string('image')->nullable();
            $table->string('title_chosen1')->nullable();
            $table->string('desc_chosen1')->nullable();
            $table->string('title_chosen2')->nullable();
            $table->string('desc_chosen2')->nullable();
            $table->string('title_chosen3')->nullable();
            $table->string('desc_chosen3')->nullable();
            $table->string('title_chosen4')->nullable();
            $table->string('desc_chosen4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_settings');
    }
};
