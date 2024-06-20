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
            ['reg_id' => 1, 'shift_id' => 1],
            ['reg_id' => 2, 'shift_id' => 1],
            ['reg_id' => 3, 'shift_id' => 2],
            ['reg_id' => 4, 'shift_id' => 2],
            ['reg_id' => 5, 'shift_id' => 1],
            ['reg_id' => 6, 'shift_id' => 1],
            ['reg_id' => 7, 'shift_id' => 2],
            ['reg_id' => 8, 'shift_id' => 2],
            ['reg_id' => 9, 'shift_id' => 1],
            ['reg_id' => 10, 'shift_id' => 1],
        ];

        foreach ($groups as $group) {
            Group::create([
                'reg_id' => $group['reg_id'],
                'shift_id' => $group['shift_id'],
            ]);
        }
    }

}
