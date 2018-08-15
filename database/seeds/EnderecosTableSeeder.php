<?php

use Illuminate\Database\Seeder;
use App\Models\Endereco;

class EnderecosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Endereco::create([
            'cep' => '82471-748',
            'logradouro' => 'Rua das Paçocas',
            'numero' => '112',
            'complemento' => 'Ap 131',
            'cidade' => 'Curitiba',
            'estado' => 'Paraná',
            'pais' => 'Brasil'
        ]);
    }
}
