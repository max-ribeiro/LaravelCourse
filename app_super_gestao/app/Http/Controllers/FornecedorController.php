<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function show() {
        $fornecedores = [
            0 => [
                "nome" => "Fornecedor 1",
                "status" => "N",
                "cnpj" => "332211",
                "ddd" => "11",
                "telefone" => "11222334455"
            ],
            1 => [
                "nome" => "Fornecedor 2",
                "status" => "S",
                "ddd" => "12",
                "telefone" => "11222334455"
            ],
            2 => [
                "nome" => "Fornecedor 3",
                "status" => "N",
                "cnpj" => "112",
                "ddd" => "11",
                "telefone" => "2233445566"
            ],
            3 => [
                "nome" => "Fornecedor 4",
                "status" => "S",
                "cnpj" => "445",
                "ddd" => "12",
                "telefone" => "3344433"
            ]
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
