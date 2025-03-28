<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestDataApiV1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            [
                'name' => 'Физика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Информатика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Математика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('students')->insert([
            [
                'name' => 'Иван Иванов',
                'phone' => '+7 912 123 12',
                'notes' => 'Прогуливает',
                'classes' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Акакий Акакиевич',
                'phone' => '+7 777 22 12',
                'notes' => 'Не делает ДЗ',
                'classes' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Шарик Шариков',
                'phone' => 'Не указан',
                'notes' => 'Пробелы со средней школы',
                'classes' => '8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Петр Гринев',
                'phone' => '+7 123 431 32',
                'notes' => 'Сообразительный',
                'classes' => '11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ебанат Подрочевич',
                'phone' => '345234',
                'notes' => 'Интересный молодой человек',
                'classes' => '9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('lessons')->insert([
            [
                'subject_id' => 1,
                'price' => '1000',
                'notes' => 'Заметка по занятию номер 362 физика',
                'homework' => 'Домашнее задание № 2436',
                'plans' => 'Не сойти с ума от этого занятия',
                'mark' => 5,
                'student_id' => 1,
                'isPaid' => true,
                'isPassed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 2,
                'price' => '500',
                'notes' => 'Заметка по занятию номер 2 информатика',
                'homework' => 'Домашнее задание № 2436',
                'plans' => 'Изучить тему № 3425',
                'mark' => 4,
                'student_id' => 2,
                'isPaid' => true,
                'isPassed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 3,
                'price' => '700',
                'notes' => 'Заметка по занятию номер 3 математика',
                'homework' => 'Домашнее задание № 321',
                'plans' => 'Изучить тему № 123',
                'mark' => 2,
                'student_id' => 3,
                'isPaid' => true,
                'isPassed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 1,
                'price' => '1200',
                'notes' => 'Заметка по занятию номер 4 физика',
                'homework' => 'Домашнее задание № 234',
                'plans' => 'Изучить тему № 77',
                'mark' => 3,
                'student_id' => 4,
                'isPaid' => false,
                'isPassed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 2,
                'price' => '600',
                'notes' => 'Заметка по занятию номер 5 информатика',
                'homework' => 'Домашнее задание № 756',
                'plans' => 'Изучить тему № 45',
                'mark' => 4,
                'student_id' => 5,
                'isPaid' => false,
                'isPassed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 3,
                'price' => '700',
                'notes' => 'Заметка по занятию номер 6 математика',
                'homework' => 'Домашнее задание № 34',
                'plans' => 'Изучить тему № 75',
                'mark' => 4,
                'student_id' => 2,
                'isPaid' => false,
                'isPassed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 1,
                'price' => '800',
                'notes' => 'Заметка по занятию номер 7 физика',
                'homework' => 'Домашнее задание № 236',
                'plans' => 'Изучить тему № 65',
                'mark' => 2,
                'student_id' => 3,
                'isPaid' => false,
                'isPassed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 2,
                'price' => '1000',
                'notes' => 'Заметка по занятию номер 8 информатика',
                'homework' => 'Домашнее задание № 54',
                'plans' => 'Изучить тему № 231',
                'mark' => 1,
                'student_id' => 4,
                'isPaid' => true,
                'isPassed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 3,
                'price' => '1100',
                'notes' => 'Заметка по занятию номер 9 математика',
                'homework' => 'Домашнее задание № 11',
                'plans' => 'Изучить тему № 45',
                'mark' => 6,
                'student_id' => 5,
                'isPaid' => false,
                'isPassed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 1,
                'price' => '1500',
                'notes' => 'Заметка по занятию номер 10 физика',
                'homework' => 'Домашнее задание № 2',
                'plans' => 'Изучить тему № 23',
                'mark' => 34,
                'student_id' => 1,
                'isPaid' => true,
                'isPassed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('student_subject')->insert([
            [
                'student_id' => 1,
                'subject_id' => 1,
            ],
            [
                'student_id' => 1,
                'subject_id' => 2,
            ],
            [
                'student_id' => 1,
                'subject_id' => 3,
            ],
            [
                'student_id' => 2,
                'subject_id' => 2,
            ],
            [
                'student_id' => 3,
                'subject_id' => 3,
            ],
            [
                'student_id' => 4,
                'subject_id' => 1,
            ],
            [
                'student_id' => 4,
                'subject_id' => 2,
            ],
            [
                'student_id' => 5,
                'subject_id' => 2,
            ],
        ]);

        DB::table('day_weeks')->insert([
            ['name' => 'пн'],
            ['name' => 'вт'],
            ['name' => 'ср'],
            ['name' => 'чт'],
            ['name' => 'пт'],
            ['name' => 'сб'],
            ['name' => 'вс'],
        ]);

        DB::table('student_day_week')->insert([
            [
                'student_id' => 1,
                'day_week_id' => 1,
            ],
            [
                'student_id' => 1,
                'day_week_id' => 4,
            ],
            [
                'student_id' => 2,
                'day_week_id' => 3,
            ],
            [
                'student_id' => 2,
                'day_week_id' => 5,
            ],
            [
                'student_id' => 3,
                'day_week_id' => 2,
            ],
            [
                'student_id' => 4,
                'day_week_id' => 5,
            ],
            [
                'student_id' => 4,
                'day_week_id' => 7,
            ],
            [
                'student_id' => 5,
                'day_week_id' => 2,
            ],
        ]);
    }
}
