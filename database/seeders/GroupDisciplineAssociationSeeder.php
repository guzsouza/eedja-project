<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GroupDisciplineAssociation;

class GroupDisciplineAssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $associations = [
            ['group_id' => '1', 'discipline_id' => '1'],
            ['group_id' => '1', 'discipline_id' => '2'],
            ['group_id' => '1', 'discipline_id' => '3'],
            ['group_id' => '2', 'discipline_id' => '4'],
            ['group_id' => '2', 'discipline_id' => '5'],
            ['group_id' => '2', 'discipline_id' => '6'],
            ['group_id' => '3', 'discipline_id' => '7'],
            ['group_id' => '3', 'discipline_id' => '8'],
            ['group_id' => '3', 'discipline_id' => '9'],
            ['group_id' => '4', 'discipline_id' => '10'],
        ];
        
        foreach ($associations as $association) {
            GroupDisciplineAssociation::create([
                'group_id' => $association['group_id'],
                'discipline_id' => $association['discipline_id'],
            ]);
        }
    }
}
