<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {            
        User::create([
            'nome' => 'Administrador',
            'usuario' => 'admin',
            'senha' => bcrypt('admin'),
            'email' => 'admin@teste.com',
            'telefone' => '(41) 1234-5678',
            'id_endereco' => '1',
        ]);        

        User::create([
            'nome' => 'Bruno Onuki',
            'usuario' => 'brunoonuki',
            'senha' => bcrypt('Teste@1'),
            'email' => 'brunoonuki@teste.com',
            'telefone' => '(41) 1234-5678',
            'id_endereco' => '1',
        ]);

        User::create([
            'nome' => 'GoEventos Festas',
            'usuario' => 'goeventosfestas',
            'senha' => bcrypt('festas123'),
            'email' => 'festas@goeventos.com',
            'telefone' => '(41) 1234-5678',
            'id_endereco' => '1',
        ]);
    }
}
