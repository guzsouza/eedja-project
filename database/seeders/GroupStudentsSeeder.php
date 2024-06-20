<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GroupStudent;

class GroupStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groupStudents = [
            ['group_id' => 1, 'student_id' => 1],
            ['group_id' => 1, 'student_id' => 2],
            ['group_id' => 2, 'student_id' => 3],
            ['group_id' => 2, 'student_id' => 4],
            ['group_id' => 3, 'student_id' => 5],
            ['group_id' => 3, 'student_id' => 6],
            ['group_id' => 4, 'student_id' => 7],
            ['group_id' => 4, 'student_id' => 8],
            ['group_id' => 5, 'student_id' => 9],
            ['group_id' => 5, 'student_id' => 10],
        ];
        
        foreach ($groupStudents as $groupStudent) {
            GroupStudent::create([
                'group_id' => $groupStudent['group_id'],
                'student_id' => $groupStudent['student_id'],
            ]);
        }
    }
}
