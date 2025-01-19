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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id') // Внешний ключ для связи с таблицей subjects
                  ->constrained('subjects')
                  ->onDelete('cascade'); // Удаление уроков при удалении предмета
            $table->integer('price'); // Стоимость занятия
            $table->text('notes')->nullable(); // Заметки по занятию, могут быть пустыми
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
