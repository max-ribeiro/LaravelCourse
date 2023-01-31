<h3>Fornecedores</h3>
@php
@endphp

@isset($fornecedores)

  @php $i = 0 @endphp
  @while(isset($fornecedores[$i]))
    Fornecedor: {{ $fornecedores[$i]['nome']}}
    <br/>
    Status: {{ $fornecedores[$i]['status'] }}
    <br/>
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'N/A'}}
    <br/>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? '' }}
    @php $i++ @endphp
    <br/>
    <br/>
  @endwhile
@endisset
<br/>
