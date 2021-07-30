<?php

use Illuminate\Database\Seeder;
use App\Estado;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new Estado();
        $manager->uf = 'Acre';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Alagoas';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Amapá';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Amazonas';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Bahia';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Ceará';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Distrito Federal';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Espirito Santo';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Goias';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Maranhão';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Mato Grosso';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Mato Grosso do Sul';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Minas Gerais';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Pará';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Paraíba';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Paraná';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Pernambuco';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Piauí';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Rio de Janeiro';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Rio Grande do Norte';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Rio Grande do Sul';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Rondônia';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Roraima';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Santa Catarina';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'São Paulo';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Sergipe';
        $manager->save();

        $manager = new Estado();
        $manager->uf = 'Tocantins';
        $manager->save();
    }
}
