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

        DB::table('lessons')->insert([
            [
                'subject_id' => '1',
                'price' => '1000',
                'notes' => 'Заметка по занятию номер 1 физика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => '2',
                'price' => '500',
                'notes' => 'Заметка по занятию номер 2 информатика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => '3',
                'price' => '700',
                'notes' => 'Заметка по занятию номер 3 математика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => '1',
                'price' => '1200',
                'notes' => 'Заметка по занятию номер 4 физика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => '2',
                'price' => '600',
                'notes' => 'Заметка по занятию номер 5 информатика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => '3',
                'price' => '700',
                'notes' => 'Заметка по занятию номер 6 математика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => '1',
                'price' => '800',
                'notes' => 'Заметка по занятию номер 7 физика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => '2',
                'price' => '1000',
                'notes' => 'Заметка по занятию номер 8 информатика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => '3',
                'price' => '1100',
                'notes' => 'Заметка по занятию номер 9 математика',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => '1',
                'price' => '1500',
                'notes' => 'Заметка по занятию номер 10 физика',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
