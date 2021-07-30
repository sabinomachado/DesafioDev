<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new Cliente();
        $manager->cpf = 1222979977;
        $manager->nome = 'José de Alencar';
        $manager->email = 'jalencar@gigatron.com.br';
        $manager->rg = '112234456';
        $manager->dt_nascimento = '1992/02/12';
        $manager->logradouro = 'Avenida Dos Nhinhabiquaras';
        $manager->numero = '543';
        $manager->complemento = '';
        $manager->bairro = 'São Carlos';
        $manager->municipio = 'Barra Mansa';
        $manager->uf = 112;
        $manager->cep = 27195000;
        $manager->telefone = 2424111503;
        $manager->celular = 24992471465;
        $manager->sexo = 'M';
    

        $manager->save();
    }
}
