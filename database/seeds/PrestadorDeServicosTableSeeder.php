<?php

use Illuminate\Database\Seeder;
use Models\PrestadorDeServico;

class PrestadorDeServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PrestadorDeServico::create([
            'CPNJ' => 'Kit Festa Gold',
            'descricao' => 'Empresa focada em servir o melhor para seus clientes....',
            'id_usuario' => '3'
        ]);  
    }
}
