<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Spreadsheet;

class SpreadSheetSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $spreadsheets = [
            [
                'id' => '1',
                'group_id' => '1',
                'teacher_id' => '1',
                'discipline_id' => '1',
                'bimester' => '1',
                'year' => '2024',
                'classes' => 10,
                'startDate' => '2024-10-01',
                'endDate' => '2024-10-31',
            ],
            [
                'id' => '2',
                'group_id' => '2',
                'teacher_id' => '2',
                'discipline_id' => '2',
                'bimester' => '2',
                'year' => '2023',
                'classes' => 10,
                'startDate' => '2023-10-01',
                'endDate' => '2023-10-31',
            ],
            [
                'id' => '3',
                'group_id' => '3',
                'teacher_id' => '10',
                'discipline_id' => '3',
                'bimester' => '3',
                'year' => '2024',
                'classes' => 10,
                'startDate' => '2023-10-01',
                'endDate' => '2023-10-31',
            ]

        ];

        foreach($spreadsheets as $spreadsheet){
            Spreadsheet::create([
                'id' => $spreadsheet['id'],
                'group_id' => $spreadsheet['group_id'],
                'teacher_id' => $spreadsheet['teacher_id'],
                'discipline_id' => $spreadsheet['discipline_id'],
                'bimester' => $spreadsheet['bimester'],
                'year' => $spreadsheet['year'],
                'classes' => $spreadsheet['classes'],
                'startDate' => $spreadsheet['startDate'],
                'endDate' => $spreadsheet['endDate']
            ]);
        }
    }
}
