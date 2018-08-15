<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EnderecosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PrestadorDeServicosTableSeeder::class);
        $this->call(TipoServicosTableSeeder::class);
        $this->call(ItemAluguelsTableSeeder::class);
        $this->call(PacotesTableSeeder::class);
        $this->call(ServicosTableSeeder::class);
    }
}
