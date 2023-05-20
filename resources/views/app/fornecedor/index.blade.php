<h3>Fornecedor...</h3>

{{-- Se a variável não estiver definida o código para de rodar, e mostrará na tela o Erro, com o @isset se a 
    variávél não estiver definida o o bloco do isset será desconsiderado  e o código do irá rodar--}}
@php
@isset($fornecedores)
    Fornecedor: {{ $fornecedores [0] ['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
@endisset
@endphp