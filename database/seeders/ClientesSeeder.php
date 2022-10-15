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
            ['codCliente'=>1],
            ['codCliente'=>2],
            ['codCliente'=>3],
            ['codCliente'=>4],
            ['codCliente'=>7],
            ['codCliente'=>8],
            ['codCliente'=>12],
            ['codCliente'=>13],
            ['codCliente'=>14],
            ['codCliente'=>17],
            ['codCliente'=>19],
            ['codCliente'=>21],
            ['codCliente'=>22],
            ['codCliente'=>24],
            ['codCliente'=>26],
            ['codCliente'=>29],
            ['codCliente'=>33],
            ['codCliente'=>36],
            ['codCliente'=>37],
            ['codCliente'=>44],
            ['codCliente'=>46],
            ['codCliente'=>48]
        ];
    
        foreach ($clientes as $key => $cliente) {
            cliente::create($cliente);
        }
    }
}