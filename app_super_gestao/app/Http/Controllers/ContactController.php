<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use Exception;

class ContactController extends Controller
{
    public function show() {
        return view('site.contact', [
            'title' => 'Entre em contato'
        ]);
    }
    public function handlePost(Request $request){

        $siteContato = new SiteContato();
        $siteContato->nome = $request->input('nome');
        $siteContato->telefone = $request->input('telefone');
        $siteContato->email = $request->input('email');
        $siteContato->motivo_contato = $request->input('motivo_contato');
        $siteContato->mensagem = $request->input('mensagem');

        try {
            $siteContato->save();
            return "gravado com sucesso!";
        } catch(Exception $e) {
            return $e;
        }
    }
}
