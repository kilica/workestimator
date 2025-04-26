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
        Schema::create('work_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->integer('interest_level')->default(0);
            $table->integer('evaluation_rating')->default(0);
            $table->boolean('helped')->default(false);
            $table->boolean('grateful')->default(false);
            $table->boolean('amazing')->default(false);
            $table->boolean('expectation')->default(false);
            $table->boolean('kind')->default(false);
            $table->boolean('genius')->default(false);
            $table->boolean('encouragement')->default(false);
            $table->boolean('perfect_score')->default(false);
            $table->boolean('excellent')->default(false);
            $table->boolean('good_work')->default(false);
            $table->text('comment')->nullable();
            $table->boolean('is_visible')->default(true);
            $table->timestamps();
            
            $table->unique(['work_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_evaluations');
    }
};
