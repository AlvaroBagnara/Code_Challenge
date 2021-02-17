<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('clientes')->insert([
            'nome' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'telefone' => 12345679,
            'sexo' => "N"
        ]);
      
    }
}
