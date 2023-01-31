@extends('site.layout.base')
@section('title', $title)
@section('body_content')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">
            <form action={{route('site.contact')}} method="POST">
                @csrf
                <input type="text" placeholder="Nome" class="borda-preta" name="name">
                <br>
                <input type="text" placeholder="Telefone" class="borda-preta" name="tel">
                <br>
                <input type="text" placeholder="E-mail" class="borda-preta" name="email">
                <br>
                <select class="borda-preta" name="subject">
                    <option value="1">Qual o motivo do contato?</option>
                    <option value="2">Dúvida</option>
                    <option value="3">Elogio</option>
                    <option value="4">Reclamação</option>
                </select>
                <br>
                <textarea class="borda-preta" name="message">Preencha aqui a sua mensagem</textarea>
                <br>
                <button type="submit" class="borda-preta">ENVIAR</button>
            </form>
        </div>
    </div>  
</div>
@endsection