<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\StudentInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student_info_id = StudentInfo::where('id',1)->select('id')->get();
        Student::updateOrCreate([

            'student_info_id' => 4,
            'name' => 'Raiyan Ahmed Sanjar',
            'phone' => '01677124243',
            'address' => 'Mirpur-10'

        ]);
    }
}
