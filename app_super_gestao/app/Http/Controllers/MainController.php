<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function show() {
        return view('site.main',[
            'title' => 'Seja Bem-Vindo!'
        ]);
    }
}
