<?php

use Illuminate\Database\Seeder;
use Models\Pacote;

class PacotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        Pacote::create([
            'titulo' => 'Kit Festa Gold',
            'descricao' => 'Kit para festas nivel Gold',
            'valor' => '50',
            'atende_qtde_pessoas' => '20',
        ]);  
    }
}
