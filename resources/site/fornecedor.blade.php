<h3>Fornecedor</h3>

@php
    /*
    if (){

    } else if(){

    } else {

    }
    */
@endphp

@if(count($fornecedores) > 0 && count ($fornecedores) < 10)
    <h3> Existem alguns fornecedores cadastradoa </h3>

@elseif(count($fornecedores) > 10)
    <h3> Existem mais de 10 fornecedores cadastrados </h3>

@else
    <h3> Ainda não existem mais de 10 fornecedores cadastrados </h3>
@endphp

