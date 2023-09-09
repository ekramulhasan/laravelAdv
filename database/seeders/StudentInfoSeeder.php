<?php

namespace Database\Seeders;

use App\Models\StudentInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        StudentInfo::updateOrCreate([

            'department' => 'Bangla',
            'section' => 'A',
            'roll_number' => '0115'

        ]);
    }
}
