<?php

use Illuminate\Database\Seeder;
use Models\Servico;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Servico::create([
            'titulo' => 'Fotografia e Filmagem',
            'descricao' => 'Empresa focada em servir o melhor para seus clientes....',
            'valor' => '50',
            'atende_qtde_pessoas' => '100',
            'id_tipo_servico' => '2',
            'id_prestador_de_servicos' => '1'
        ]);  
    }
}
