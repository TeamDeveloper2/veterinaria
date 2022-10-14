<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = [
            [
                'codCliente'=>2
            ],
            [
                'codCliente'=>3
            ],
            [
                'codCliente'=>4
            ],
            [
                'codCliente'=>5
            ],            
        ];
    
        foreach ($clientes as $key => $cliente) {
            cliente::create($cliente);
        }
    }
}
