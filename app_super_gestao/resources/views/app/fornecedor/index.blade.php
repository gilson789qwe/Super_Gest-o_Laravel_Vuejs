<h3>Fornecedor</h3>

@php

@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0['status'] }}
    <br>
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    Telefone: ({{ $fornecedores[0]['ddd'] ?? '' }}) ({{ $fornecedores[0]['telefone'] ?? '' }})

@endisset
