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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover_image')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->integer('difficulty_rating')->default(0);
            $table->integer('impact_rating')->default(0);
            $table->integer('progress_rating')->default(0);
            $table->text('background')->nullable();
            $table->text('achievement')->nullable();
            $table->text('improvements')->nullable();
            $table->text('related_videos')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
