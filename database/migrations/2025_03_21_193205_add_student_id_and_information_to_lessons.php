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
        Schema::table('lessons', function (Blueprint $table) {
            $table->string('homework')->default('Не задано');
            $table->string('plans')->default('Не задано');
            $table->integer('mark')->nullable();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropColumn('homework');
            $table->dropColumn('plans');
            $table->dropColumn('mark');
            $table->dropColumn('student_id');
        });
    }
};
