<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function show() {
        return view('site.contact', [
            'title' => 'Entre em contato'
        ]);
    }
}
