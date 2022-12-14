<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GuzzleHttp\Promise\Create;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateUsersSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(AdministradoresSeeder::class);
        $this->call(MascotaSeeder::class);
        $this->call(CitasSeeder::class);
        $this->call(CscSeeder::class);
        $this->call(PmbsSeeder::class);
        $this->call(EnfermedadesCardiacasSeeder::class);
        //-----------------------
        $this->call(EmergenciaSeeder::class);
        $this->call(EnfermedadSeeder::class);
        $this->call(TabletaSeeder::class);
        $this->call(HistoricoSeeder::class);
        //-----------------------
        $this->call(InventarioSeeder::class);

        $this->call(ProveedoresSeeder::class);
        $this->call(VentaClientesSeeder::class);
        $this->call(VentasSeeder::class);
        $this->call(SpaSeeder::class);

        $this->call(CirugiaSeeder::class);

    }
}
