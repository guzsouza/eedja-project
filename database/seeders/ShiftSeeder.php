<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shift;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shifts = [
            ['id' => '1', 'name' => 'Vespertino'],
            ['id' => '2', 'name' => 'Matutino'],
            ['id' => '3', 'name' => 'Integral']
        ];
        
        foreach ($shifts as $shift) {
            Shift::create([
                'id' => $shift['id'],
                'name' => $shift['name'],
            ]);
        }
    }
}
