<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $groups = [
            ['name' => 'REG1', 'shift_id' => 1],
            ['name' => 'REG2', 'shift_id' => 1],
            ['name' => 'REG3', 'shift_id' => 2],
            ['name' => 'REG4', 'shift_id' => 2],
            ['name' => 'REG5', 'shift_id' => 1],
            ['name' => 'REG6', 'shift_id' => 1],
            ['name' => 'REG7', 'shift_id' => 2],
            ['name' => 'REG8', 'shift_id' => 2],
            ['name' => 'REG9', 'shift_id' => 1],
            ['name' => 'REG10', 'shift_id' => 1],
        ];

        foreach ($groups as $group) {
            Group::create([
                'name' => $group['name'],
                'shift_id' => $group['shift_id'],
            ]);
        }
    }

}
