<?php

namespace Database\Seeders;

use App\Models\Discipline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $disciplines = [
            ['id' => '1', 'name' => 'Matematica'],
            ['id' => '2', 'name' => 'Portugues'],
            ['id' => '3', 'name' => 'Historia'],
            ['id' => '4', 'name' => 'Geografia'],
            ['id' => '5', 'name' => 'Fisica'],
            ['id' => '6', 'name' => 'Quimica'],
            ['id' => '7', 'name' => 'Biologia'],
            ['id' => '8', 'name' => 'Ingles'],
            ['id' => '9', 'name' => 'Espanhol'],
            ['id' => '10', 'name' => 'Educacao Fisica'],
            ['id' => '11', 'name' => 'Artes'],
            ['id' => '12', 'name' => 'Filosofia'],
            ['id' => '13', 'name' => 'Sociologia'],
        ];
        
        foreach ($disciplines as $discipline) {
            Discipline::create([
                'id' => $discipline['id'],
                'name' => $discipline['name'],
            ]);
        }
    }
}
