<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //object;
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornece Dor';
        $fornecedor->uf = 'FO';
        $fornecedor->email = 'fornecedor@fornece.com';
        $fornecedor->site = 'fornece.com';
        $fornecedor->save();

        //static
        Fornecedor::create([
            'nome' => 'Fn',
            'uf' => 'FN',
            'email' => 'fn@fn.com',
            'site' => 'fn.com'
        ]);

        //Using DB class
        DB::table('fornecedores')->insert([
            'nome' => 'Fn',
            'uf' => 'FN',
            'email' => 'fn@fn.com',
            'site' => 'fn.com'
        ]);
    }
}
