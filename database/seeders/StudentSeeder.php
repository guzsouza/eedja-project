<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ['id' => '1', 'name' => 'Pedro Silva'],
            ['id' => '2', 'name' => 'Ana Clara'],
            ['id' => '3', 'name' => 'Carlos Eduardo'],
            ['id' => '4', 'name' => 'Maria Fernanda'],
            ['id' => '5', 'name' => 'João Vitor'],
            ['id' => '6', 'name' => 'Mariana Oliveira'],
            ['id' => '7', 'name' => 'Lucas Pereira'],
            ['id' => '8', 'name' => 'Isabela Costa'],
            ['id' => '9', 'name' => 'Fernando Gomes'],
            ['id' => '10', 'name' => 'Larissa Santos'],
        ];
        
        foreach ($students as $student) {
            Student::create([
                'id' => $student['id'],
                'name' => $student['name'],
            ]);
        }
    }
}
