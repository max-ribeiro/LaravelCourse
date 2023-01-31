<h3>Fornecedores</h3>
@php
@endphp

@isset($fornecedores)
  @forelse($fornecedores as $fornecedor)
    Fornecedor: {{ $fornecedor['nome']}}
    <br/>
    Status: {{ $fornecedor['status'] }}
    <br/>
    CNPJ: {{ $fornecedor['cnpj'] ?? 'N/A'}}
    <br/>
    Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? '' }}
    <br/>
    <hr/>
  @empty
    Não existem fornecedores cadastrados.
  @endforelse
@endisset
<br/>
