<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
            'full_name' => 'Jasur Hamidov',
            'birth_date' => '1990-01-01',
            'experience' => 15
        ]);

        DB::table('doctors')->insert([
            'id' => 3,
            'full_name' => 'Murod Baxshulloyev',
            'birth_date' => '2024-02-01',
            'experience' => 5
        ]);

        DB::table('doctors')->insert([
            'full_name' => 'Kamol Jamolov',
            'birth_date' => '2024-02-02',
            'experience' => 3
        ]);

        DB::table('doctors')->insert([
            'full_name' => 'Rasul Magamedov',
            'birth_date' => '2024-02-02',
            'experience' => 4
        ]);
    }
}
