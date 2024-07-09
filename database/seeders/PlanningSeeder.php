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
                'spreadsheet_id' => '1',
                'date' => '2024-01-01',
                'content' => 'Introduction to Algebra',
                'skills' => 'Basic algebraic operations',
                'resource' => 'Textbook, Worksheet',
                'metodology' => 'Lecture, Group work',
                'project' => 'Algebra project'
            ],
            [
                'id' => '12',
                'spreadsheet_id' => '1',
                'date' => '2024-02-01',
                'content' => 'Portuguese Grammar',
                'skills' => 'Grammar rules, Writing skills',
                'resource' => 'Grammar book, Exercises',
                'metodology' => 'Discussion, Exercises',
                'project' => 'Grammar workbook'
            ],
            [
                'id' => '2',
                'spreadsheet_id' => '1',
                'date' => '2024-02-01',
                'content' => 'Geometry Fundamentals',
                'skills' => 'Geometric shapes and angles',
                'resource' => 'Geometric tools, Online resources',
                'metodology' => 'Demonstration, Problem-solving',
                'project' => 'Geometric constructions'
            ],
            [
                'id' => '3',
                'spreadsheet_id' => '1',
                'date' => '2024-03-01',
                'content' => 'History of Science',
                'skills' => 'Historical analysis, Scientific revolutions',
                'resource' => 'Books, Documentaries',
                'metodology' => 'Debate, Research projects',
                'project' => 'Scientific breakthroughs'
            ],
            [
                'id' => '4',
                'spreadsheet_id' => '1',
                'date' => '2024-04-01',
                'content' => 'Literature Appreciation',
                'skills' => 'Critical analysis, Literary techniques',
                'resource' => 'Novels, Poems',
                'metodology' => 'Interactive reading, Creative writing',
                'project' => 'Literary analysis'
            ],
            [
                'id' => '5',
                'spreadsheet_id' => '1',
                'date' => '2024-05-01',
                'content' => 'Introduction to Chemistry',
                'skills' => 'Chemical elements and reactions',
                'resource' => 'Laboratory equipment, Textbooks',
                'metodology' => 'Experiments, Discussions',
                'project' => 'Chemical analysis'
            ],
            [
                'id' => '6',
                'spreadsheet_id' => '1',
                'date' => '2024-06-01',
                'content' => 'Advanced Algebra',
                'skills' => 'Equations and inequalities',
                'resource' => 'Mathematical software, Problem sets',
                'metodology' => 'Workshops, Individual practice',
                'project' => 'Algebraic modeling'
            ],            
            [
                'id' => '13',
                'spreadsheet_id' => '1',
                'date' => '2024-03-01',
                'content' => 'History of Brazil',
                'skills' => 'Historical analysis',
                'resource' => 'History book, Maps',
                'metodology' => 'Lecture, Research',
                'project' => 'Historical timeline'
            ],
            [
                'id' => '14',
                'spreadsheet_id' => '1',
                'date' => '2024-04-01',
                'content' => 'Geography of Europe',
                'skills' => 'Map reading, Geographic analysis',
                'resource' => 'Atlas, Slides',
                'metodology' => 'Lecture, Map exercises',
                'project' => 'Geographic report'
            ],
            [
                'id' => '15',
                'spreadsheet_id' => '2',
                'date' => '2024-05-01',
                'content' => 'Basic Physics',
                'skills' => 'Physics principles',
                'resource' => 'Lab equipment, Textbook',
                'metodology' => 'Lecture, Lab experiments',
                'project' => 'Physics lab report'
            ],
            [
                'id' => '16',
                'spreadsheet_id' => '2',
                'date' => '2024-06-01',
                'content' => 'Chemistry Basics',
                'skills' => 'Chemical reactions',
                'resource' => 'Chemistry set, Textbook',
                'metodology' => 'Lecture, Group experiments',
                'project' => 'Chemistry project'
            ],
            [
                'id' => '7',
                'spreadsheet_id' => '2',
                'date' => '2024-07-01',
                'content' => 'Introduction to Biology',
                'skills' => 'Biological concepts',
                'resource' => 'Microscope, Slides',
                'metodology' => 'Lecture, Lab work',
                'project' => 'Biology report'
            ],
            [
                'id' => '8',
                'spreadsheet_id' => '2',
                'date' => '2024-08-01',
                'content' => 'English Literature',
                'skills' => 'Reading, Analysis',
                'resource' => 'Novels, Poems',
                'metodology' => 'Discussion, Reading',
                'project' => 'Literature essay'
            ],
            [
                'id' => '9',
                'spreadsheet_id' => '2',
                'date' => '2024-09-01',
                'content' => 'Spanish Grammar',
                'skills' => 'Grammar, Vocabulary',
                'resource' => 'Textbook, Worksheets',
                'metodology' => 'Lecture, Exercises',
                'project' => 'Grammar workbook'
            ],
            [
                'id' => '10',
                'spreadsheet_id' => '2',
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
                'spreadsheet_id' => $planning['spreadsheet_id'],
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
