<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    public function run(): void
    {
        $addresses = [
            [
                'user_id' => 1,
                'address' => 'Rua das Flores',
                'number' => '123',
                'neighborhood' => 'Centro',
                'city' => 'São Paulo',
                'state' => 'SP',
                'country' => 'Brasil',
                'cep' => '01001-000',
            ],
            [
                'user_id' => 2,
                'address' => 'Avenida Paulista',
                'number' => '456',
                'neighborhood' => 'Bela Vista',
                'city' => 'São Paulo',
                'state' => 'SP',
                'country' => 'Brasil',
                'cep' => '01310-000',
            ],
            [
                'user_id' => 3,
                'address' => 'Rua XV de Novembro',
                'number' => '789',
                'neighborhood' => 'Centro',
                'city' => 'Curitiba',
                'state' => 'PR',
                'country' => 'Brasil',
                'cep' => '80020-310',
            ],
            [
                'user_id' => 4,
                'address' => 'Praça da Sé',
                'number' => '101',
                'neighborhood' => 'Sé',
                'city' => 'São Paulo',
                'state' => 'SP',
                'country' => 'Brasil',
                'cep' => '01001-001',
            ],
            [
                'user_id' => 5,
                'address' => 'Rua Augusta',
                'number' => '202',
                'neighborhood' => 'Consolação',
                'city' => 'São Paulo',
                'state' => 'SP',
                'country' => 'Brasil',
                'cep' => '01304-001',
            ],
            [
                'user_id' => 6,
                'address' => 'Avenida Rio Branco',
                'number' => '303',
                'neighborhood' => 'Centro',
                'city' => 'Rio de Janeiro',
                'state' => 'RJ',
                'country' => 'Brasil',
                'cep' => '20090-003',
            ],
            [
                'user_id' => 7,
                'address' => 'Rua da Quitanda',
                'number' => '404',
                'neighborhood' => 'Centro',
                'city' => 'Rio de Janeiro',
                'state' => 'RJ',
                'country' => 'Brasil',
                'cep' => '20011-030',
            ],
            [
                'user_id' => 8,
                'address' => 'Avenida Atlântica',
                'number' => '505',
                'neighborhood' => 'Copacabana',
                'city' => 'Rio de Janeiro',
                'state' => 'RJ',
                'country' => 'Brasil',
                'cep' => '22010-000',
            ],
            [
                'user_id' => 9,
                'address' => 'Rua dos Andradas',
                'number' => '606',
                'neighborhood' => 'Centro',
                'city' => 'Porto Alegre',
                'state' => 'RS',
                'country' => 'Brasil',
                'cep' => '90020-003',
            ],
            [
                'user_id' => 10,
                'address' => 'Rua da Praia',
                'number' => '707',
                'neighborhood' => 'Centro Histórico',
                'city' => 'Porto Alegre',
                'state' => 'RS',
                'country' => 'Brasil',
                'cep' => '90010-000',
            ]
        ];

        foreach($addresses as $address){
            Address::create([
                'user_id' => $address['user_id'],
                'address' => $address['address'],
                'number' => $address['number'],
                'neighborhood' => $address['neighborhood'],
                'city' => $address['city'],
                'state' => $address['state'],
                'country' => $address['country'],
                'cep' => $address['cep']
            ]);
        }
    }
}
