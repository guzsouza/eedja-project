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
            ['user_id' => '1', 'name' => 'João Augusto', 'lastname' => 'Silva'],
            ['user_id' => '2', 'name' => 'Maria Silva', 'lastname' => 'Silva'],
            ['user_id' => '3', 'name' => 'Carlos Oliveira', 'lastname' => 'Silva'],
            ['user_id' => '4', 'name' => 'Ana Souza', 'lastname' => 'Silva'],
            ['user_id' => '5', 'name' => 'Pedro Martins', 'lastname' => 'Silva'],
            ['user_id' => '6', 'name' => 'Lucia Fernandes', 'lastname' => 'Silva'],
            ['user_id' => '7', 'name' => 'Roberto Lima', 'lastname' => 'Silva'],
            ['user_id' => '8', 'name' => 'Fernanda Costa', 'lastname' => 'Silva'],
            ['user_id' => '9', 'name' => 'Marcos Pereira', 'lastname' => 'Silva'],
            ['user_id' => '10', 'name' => 'Paula Rodrigues', 'lastname' => 'Silva'],
        ];
        
        foreach ($teachers as $teacher) {
            Teacher::create([
                'user_id' => $teacher['user_id'],
                'name' => $teacher['name'],
                'lastname' => $teacher['lastname'],
            ]);
        }
    }
}
