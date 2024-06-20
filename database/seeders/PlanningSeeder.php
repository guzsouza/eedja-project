<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Planning;

class PlanningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plannings = [
            [
                'id' => '1',
                'group_id' => '1',
                'teacher_id' => '1',
                'discipline_id' => '1',
                'classes' => 10,
                'startDate' => '2024-01-01',
                'endDate' => '2024-01-31',
                'date' => '2024-01-01',
                'content' => 'Introduction to Algebra',
                'skills' => 'Basic algebraic operations',
                'resource' => 'Textbook, Worksheet',
                'metodology' => 'Lecture, Group work',
                'project' => 'Algebra project'
            ],
            [
                'id' => '2',
                'group_id' => '2',
                'teacher_id' => '2',
                'discipline_id' => '2',
                'classes' => 10,
                'startDate' => '2024-02-01',
                'endDate' => '2024-02-28',
                'date' => '2024-02-01',
                'content' => 'Portuguese Grammar',
                'skills' => 'Grammar rules, Writing skills',
                'resource' => 'Grammar book, Exercises',
                'metodology' => 'Discussion, Exercises',
                'project' => 'Grammar workbook'
            ],
            [
                'id' => '3',
                'group_id' => '3',
                'teacher_id' => '3',
                'discipline_id' => '3',
                'classes' => 10,
                'startDate' => '2024-03-01',
                'endDate' => '2024-03-31',
                'date' => '2024-03-01',
                'content' => 'History of Brazil',
                'skills' => 'Historical analysis',
                'resource' => 'History book, Maps',
                'metodology' => 'Lecture, Research',
                'project' => 'Historical timeline'
            ],
            [
                'id' => '4',
                'group_id' => '4',
                'teacher_id' => '4',
                'discipline_id' => '4',
                'classes' => 10,
                'startDate' => '2024-04-01',
                'endDate' => '2024-04-30',
                'date' => '2024-04-01',
                'content' => 'Geography of Europe',
                'skills' => 'Map reading, Geographic analysis',
                'resource' => 'Atlas, Slides',
                'metodology' => 'Lecture, Map exercises',
                'project' => 'Geographic report'
            ],
            [
                'id' => '5',
                'group_id' => '5',
                'teacher_id' => '5',
                'discipline_id' => '5',
                'classes' => 10,
                'startDate' => '2024-05-01',
                'endDate' => '2024-05-31',
                'date' => '2024-05-01',
                'content' => 'Basic Physics',
                'skills' => 'Physics principles',
                'resource' => 'Lab equipment, Textbook',
                'metodology' => 'Lecture, Lab experiments',
                'project' => 'Physics lab report'
            ],
            [
                'id' => '6',
                'group_id' => '6',
                'teacher_id' => '6',
                'discipline_id' => '6',
                'classes' => 10,
                'startDate' => '2024-06-01',
                'endDate' => '2024-06-30',
                'date' => '2024-06-01',
                'content' => 'Chemistry Basics',
                'skills' => 'Chemical reactions',
                'resource' => 'Chemistry set, Textbook',
                'metodology' => 'Lecture, Group experiments',
                'project' => 'Chemistry project'
            ],
            [
                'id' => '7',
                'group_id' => '7',
                'teacher_id' => '7',
                'discipline_id' => '7',
                'classes' => 10,
                'startDate' => '2024-07-01',
                'endDate' => '2024-07-31',
                'date' => '2024-07-01',
                'content' => 'Introduction to Biology',
                'skills' => 'Biological concepts',
                'resource' => 'Microscope, Slides',
                'metodology' => 'Lecture, Lab work',
                'project' => 'Biology report'
            ],
            [
                'id' => '8',
                'group_id' => '8',
                'teacher_id' => '8',
                'discipline_id' => '8',
                'classes' => 10,
                'startDate' => '2024-08-01',
                'endDate' => '2024-08-31',
                'date' => '2024-08-01',
                'content' => 'English Literature',
                'skills' => 'Reading, Analysis',
                'resource' => 'Novels, Poems',
                'metodology' => 'Discussion, Reading',
                'project' => 'Literature essay'
            ],
            [
                'id' => '9',
                'group_id' => '9',
                'teacher_id' => '9',
                'discipline_id' => '9',
                'classes' => 10,
                'startDate' => '2024-09-01',
                'endDate' => '2024-09-30',
                'date' => '2024-09-01',
                'content' => 'Spanish Grammar',
                'skills' => 'Grammar, Vocabulary',
                'resource' => 'Textbook, Worksheets',
                'metodology' => 'Lecture, Exercises',
                'project' => 'Grammar workbook'
            ],
            [
                'id' => '10',
                'group_id' => '10',
                'teacher_id' => '10',
                'discipline_id' => '10',
                'classes' => 10,
                'startDate' => '2024-10-01',
                'endDate' => '2024-10-31',
                'date' => '2024-10-01',
                'content' => 'Physical Education',
                'skills' => 'Fitness, Teamwork',
                'resource' => 'Gym equipment',
                'metodology' => 'Exercises, Sports',
                'project' => 'Fitness report'
            ],
        ];
        
        foreach ($plannings as $planning) {
            Planning::create([
                'id' => $planning['id'],
                'group_id' => $planning['group_id'],
                'teacher_id' => $planning['teacher_id'],
                'discipline_id' => $planning['discipline_id'],
                'classes' => $planning['classes'],
                'startDate' => $planning['startDate'],
                'endDate' => $planning['endDate'],
                'date' => $planning['date'],
                'content' => $planning['content'],
                'skills' => $planning['skills'],
                'resource' => $planning['resource'],
                'metodology' => $planning['metodology'],
                'project' => $planning['project'],
            ]);
        }
    }
}
