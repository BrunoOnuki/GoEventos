<?php

use Illuminate\Database\Seeder;
use Models\ItemAluguel;

class ItemAluguelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemAluguel::create([
            'descricao' => 'Faca de prata',
            'valor_unitario' => '4,25',
            'qtde_total' => '1',
        ]);  
    }
}
