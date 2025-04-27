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
        Schema::table('users', function (Blueprint $table) {
            $table->string('display_name')->after('id');
        });
        
        \DB::statement('UPDATE users SET display_name = name');
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('twitter_name')->nullable();
            $table->text('bio')->nullable();
            $table->enum('role', ['admin', 'staff', 'general'])->default('general');
            $table->enum('status', ['active', 'inactive', 'deleted'])->default('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->dropColumn(['twitter_name', 'bio', 'role', 'status']);
        });
        
        \DB::statement('UPDATE users SET name = display_name');
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('display_name');
        });
    }
};
