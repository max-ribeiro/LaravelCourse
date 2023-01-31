<h3>Fornecedores</h3>
@php
@endphp

@isset($fornecedores)
  Fornecedor: {{ $fornecedores[0]['nome']}}
  <br/>
  Status: {{ $fornecedores[0]['status'] }}
  <br/>
  CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'N/A'}}
  <br/>
  Telefone: ({{ $fornecedores[0]['ddd'] ?? ''}}) {{ $fornecedores[0]['telefone'] ?? '' }}
  @switch($fornecedores[0]['ddd'])
    @case('11')
      Rio Janeiro - RJ
      @break
    @case('12')
      São Paulo - SP
      @break
  @endswitch
@endisset

<br/>
@for($i = 0; $i < count($fornecedores); $i++)
  {{$fornecedores[$i]['nome']}}
  <br/>
@endfor
<br/>

@for($i = 0; isset($fornecedores[$i]); $i++)
  {{$fornecedores[$i]['nome']}}
  <br/>
@endfor
<br/>

@foreach($fornecedores as $fornecedor)
  {{$fornecedor['nome']}}
  <br/>
@endforeach
<br/>
