<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patients')->insert([
            'name' => 'Abdurahmon',
            'birth_date' => '1990-01-01',
            'phone' => 123123,
            'disease' => 'Gemaroy',
            'room' => 45,
            'doctor_id' => 1,
            'photo' => 'storage/pdC5X7iDCzclOsWetxkClEYyhzxoHGwovBCR4NsF.jpg',
            'date' => '2024-02-20'
        ]);
    }
}
