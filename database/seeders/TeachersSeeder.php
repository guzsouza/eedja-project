<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            ['id' => '1', 'name' => 'João Augusto'],
            ['id' => '2', 'name' => 'Maria Silva'],
            ['id' => '3', 'name' => 'Carlos Oliveira'],
            ['id' => '4', 'name' => 'Ana Souza'],
            ['id' => '5', 'name' => 'Pedro Martins'],
            ['id' => '6', 'name' => 'Lucia Fernandes'],
            ['id' => '7', 'name' => 'Roberto Lima'],
            ['id' => '8', 'name' => 'Fernanda Costa'],
            ['id' => '9', 'name' => 'Marcos Pereira'],
            ['id' => '10', 'name' => 'Paula Rodrigues'],
        ];
        
        foreach ($teachers as $teacher) {
            Teacher::create([
                'id' => $teacher['id'],
                'name' => $teacher['name'],
            ]);
        }
    }
}
