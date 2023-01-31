@extends('site.layout.base')
@section('title', $title)
@section('body_content')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
           @component('site.layout.components.form_contact')
           <p>Iremos analisar o e-mail e retornaremos em até 24 horas!</p>
           @endcomponent
        </div>
    </div>  
</div>
@endsection