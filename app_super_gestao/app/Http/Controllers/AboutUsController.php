<?php

namespace App\Http\Controllers;

class AboutUsController extends Controller
{
    public function show() {
        return view('site.about', [
            'title' => 'Sobre nós!'
        ]);
    }
}
