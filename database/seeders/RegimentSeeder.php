<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Regiment;

class RegimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regiments = [
            ['id' => '1', 'name' => '1º REG 01'],
            ['id' => '2', 'name' => '1º REG 02'],
            ['id' => '3', 'name' => '2º REG 01'],
            ['id' => '4', 'name' => '2º REG 02'],
            ['id' => '5', 'name' => '3º REG 01'],
            ['id' => '6', 'name' => '3º REG 02'],
            ['id' => '7', 'name' => '7º REG 01'],
            ['id' => '8', 'name' => '7º REG 02'],
            ['id' => '9', 'name' => '8º REG 01'],
            ['id' => '10', 'name' => '8º REG 02'],
        ];
        
        foreach ($regiments as $regiment) {
            Regiment::create([
                'id' => $regiment['id'],
                'name' => $regiment['name'],
            ]);
        }
    }
}
