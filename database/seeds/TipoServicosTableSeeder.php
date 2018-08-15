<?php

use Illuminate\Database\Seeder;
use Models\TipoServico;
class TipoServicoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TipoServico::create([
            'titulo' => 'Casamento',
            'descricao' => '',            
        ]);  
        TipoServico::create([
            'titulo' => 'Festas de aniversario',
            'descricao' => '',            
        ]);  
        TipoServico::create([
            'titulo' => 'Festas de 15 anos',
            'descricao' => '',            
        ]);  
        TipoServico::create([
            'titulo' => 'Festas de empresa',
            'descricao' => '.',            
        ]);  
        TipoServico::create([
            'titulo' => 'Churrasco',
            'descricao' => '.',            
        ]);  
        TipoServico::create([
            'titulo' => 'Filmagem',
            'descricao' => '.',            
        ]); 
        TipoServico::create([
            'titulo' => 'Fotografia',
            'descricao' => '.',            
        ]); 
        TipoServico::create([
            'titulo' => 'Orador',
            'descricao' => '.',            
        ]); 
        TipoServico::create([
            'titulo' => 'Buffet',
            'descricao' => '.',            
        ]); 
        TipoServico::create([
            'titulo' => 'Brinquedos',
            'descricao' => '.',            
        ]); 
        TipoServico::create([
            'titulo' => 'Utensílios',
            'descricao' => '.',            
        ]); 
        TipoServico::create([
            'titulo' => 'Decoracao',
            'descricao' => '.',            
        ]); 
    }
}
