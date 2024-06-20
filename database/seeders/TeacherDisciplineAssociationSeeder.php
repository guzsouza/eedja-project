<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TeacherDisciplineAssociation;

class TeacherDisciplineAssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $associations = [
            ['discipline_id' => 1, 'teacher_id' => 1],
            ['discipline_id' => 2, 'teacher_id' => 2],
            ['discipline_id' => 3, 'teacher_id' => 3],
            ['discipline_id' => 4, 'teacher_id' => 4],
            ['discipline_id' => 5, 'teacher_id' => 5],
            ['discipline_id' => 6, 'teacher_id' => 6],
            ['discipline_id' => 7, 'teacher_id' => 7],
            ['discipline_id' => 8, 'teacher_id' => 8],
            ['discipline_id' => 9, 'teacher_id' => 9],
            ['discipline_id' => 10, 'teacher_id' => 10],
        ];
        
        foreach ($associations as $association) {
            TeacherDisciplineAssociation::create([
                'discipline_id' => $association['discipline_id'],
                'teacher_id' => $association['teacher_id'],
            ]);
        }
    }
}
