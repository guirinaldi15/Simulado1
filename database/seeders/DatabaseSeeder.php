<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Usuario padrão para acessar o sistema
      User::create([
        'name'=>'Admin',
        'email'=>'admin@senai.br',
        'password'=>Hash::make('123'),
      ]);

      //Produtos
      Produto::create([
        'nome'=>'Cimento',
        'valor'=>50.90,
        'qtd_estoque'=>0,
        'qtd_minima'=>5,
      ]);

      Produto::create([
        'nome'=>'Tinta azul',
        'valor'=>30,
        'qtd_estoque'=>0,
        'qtd_minima'=>3,
      ]);

      Produto::create([
        'nome'=>'Argamassa',
        'valor'=>99.99,
        'qtd_estoque'=>0,
        'qtd_minima'=>8,
      ]);
    }
}