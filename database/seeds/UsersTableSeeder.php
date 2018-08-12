<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Endereco;

class UsersTableSeeder extends Seeder
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
            

        Usuario::create([
            'nome' => 'Bruno Onuki',
            'usuario' => 'brunoonuki',
            'senha' => bcrypt('Teste@1'),
            'email' => 'brunoonuki@teste.com',
            'telefone' => '(41) 1234-5678',
            'endereco_id' => '13',
        ]);
        
        
    }
}
