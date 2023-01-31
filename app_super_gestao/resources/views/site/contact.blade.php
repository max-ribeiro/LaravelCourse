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
           @endcomponent
        </div>
    </div>  
</div>
@endsection