<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $users = [
            [
                'id' => '1',
                'role' => 'teacher',
                'name' => 'João Augusto',
                'email' => 'joao@gmail.com',
                'password' => '12345678',
                'cpf' => '123.456.789-01',
                'profilePhoto' => 'path/to/photo1.jpg',
                'telephone' => '1234-5678'
            ],
            [
                'id' => '2',
                'role' => 'teacher',
                'name' => 'Maria Silva',
                'email' => 'maria.silva@example.com',
                'password' => 'password123',
                'cpf' => '234.567.890-12',
                'profilePhoto' => 'path/to/photo2.jpg',
                'telephone' => '2345-6789'
            ],
            [
                'id' => '3',
                'role' => 'teacher',
                'name' => 'Carlos Oliveira',
                'email' => 'carlos.oliveira@example.com',
                'password' => 'password123',
                'cpf' => '345.678.901-23',
                'profilePhoto' => 'path/to/photo3.jpg',
                'telephone' => '3456-7890'
            ],
            [
                'id' => '4',
                'role' => 'teacher',
                'name' => 'Ana Souza',
                'email' => 'ana.souza@example.com',
                'password' => 'password123',
                'cpf' => '456.789.012-34',
                'profilePhoto' => 'path/to/photo4.jpg',
                'telephone' => '4567-8901'
            ],
            [
                'id' => '5',
                'role' => 'teacher',
                'name' => 'Pedro Martins',
                'email' => 'pedro.martins@example.com',
                'password' => 'password123',
                'cpf' => '567.890.123-45',
                'profilePhoto' => 'path/to/photo5.jpg',
                'telephone' => '5678-9012'
            ],
            [
                'id' => '6',
                'role' => 'teacher',
                'name' => 'Lucia Fernandes',
                'email' => 'lucia.fernandes@example.com',
                'password' => 'password123',
                'cpf' => '678.901.234-56',
                'profilePhoto' => 'path/to/photo6.jpg',
                'telephone' => '6789-0123'
            ],
            [
                'id' => '7',
                'role' => 'teacher',
                'name' => 'Roberto Lima',
                'email' => 'roberto.lima@example.com',
                'password' => 'password123',
                'cpf' => '789.012.345-67',
                'profilePhoto' => 'path/to/photo7.jpg',
                'telephone' => '7890-1234'
            ],
            [
                'id' => '8',
                'role' => 'teacher',
                'name' => 'Fernanda Costa',
                'email' => 'fernanda.costa@example.com',
                'password' => 'password123',
                'cpf' => '890.123.456-78',
                'profilePhoto' => 'path/to/photo8.jpg',
                'telephone' => '8901-2345'
            ],
            [
                'id' => '9',
                'role' => 'teacher',
                'name' => 'Marcos Pereira',
                'email' => 'marcos.pereira@example.com',
                'password' => 'password123',
                'cpf' => '901.234.567-89',
                'profilePhoto' => 'path/to/photo9.jpg',
                'telephone' => '9012-3456'
            ],
            [
                'id' => '10',
                'role' => 'teacher',
                'name' => 'Paula Rodrigues',
                'email' => 'aaaaaaa@gmail.com',
                'password' => '12345678',
                'cpf' => '012.345.678-90',
                'profilePhoto' => 'path/to/photo10.jpg',
                'telephone' => '0123-4567'
            ],
            [
                'id' => '11',
                'role' => 'admin',
                'name' => 'Teste',
                'email' => 'teste@gmail.com',
                'password' => '12345678',
                'cpf' => '012.345.678-90',
                'profilePhoto' => 'path/to/photo10.jpg',
                'telephone' => '0123-4567'
            ]
        ];
        
        foreach ($users as $user) {
            User::create([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'cpf' => $user['cpf'],
                'role' => $user['role'],
                'profilePhoto' => $user['profilePhoto'],
                'telephone' => $user['telephone']
            ]);
        }
    }
}
