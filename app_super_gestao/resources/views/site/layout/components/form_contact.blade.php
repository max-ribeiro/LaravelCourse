{{ $slot }}
<form action={{route('site.contact')}} method="POST">
    @csrf
    @php $class = $class ?? 'borda-preta'; @endphp

    <input type="text" placeholder="Nome" class="{{$class}}" name="nome">
    <br>
    <input type="text" placeholder="Telefone" class="{{$class}}" name="telefone">
    <br>
    <input type="text" placeholder="E-mail" class="{{$class}}" name="email">
    <br>
    <select class="{{$class}}" name="motivo_contato">
        <option value="1">Qual o motivo do contato?</option>
        <option value="2">Dúvida</option>
        <option value="3">Elogio</option>
        <option value="4">Reclamação</option>
    </select>
    <br>
    <textarea class="{{$class}}" name="mensagem">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{$class}}">ENVIAR</button>
</form>