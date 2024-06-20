<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeacherGroupAssociation;

class TeacherGroupAssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $associations = [
            ['group_id' => 1, 'teacher_id' => 1],
            ['group_id' => 2, 'teacher_id' => 2],
            ['group_id' => 3, 'teacher_id' => 3],
            ['group_id' => 4, 'teacher_id' => 4],
            ['group_id' => 5, 'teacher_id' => 5],
            ['group_id' => 6, 'teacher_id' => 6],
            ['group_id' => 7, 'teacher_id' => 7],
            ['group_id' => 8, 'teacher_id' => 8],
            ['group_id' => 9, 'teacher_id' => 9],
            ['group_id' => 10, 'teacher_id' => 10],
        ];
        
        foreach ($associations as $association) {
            TeacherGroupAssociation::create([
                'group_id' => $association['group_id'],
                'teacher_id' => $association['teacher_id'],
            ]);
        }
    }
}
