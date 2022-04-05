<h3>Fornecedor</h3>


{{ 'Texto de teste' }}
<br />
<?= 'Texto de teste' ?>
<br />
{{-- Fica o comentário que será descartado pelo interpretador do blade--}}


@php
    // Para comentários de uma linha
    /*
        Para comentários de multiplas linhas
    */
    echo "Texto de teste"

    //if php puro
    /*
        if()
        {}
        elseif()
        {}
        else
        {}
    */
@endphp


@isset($fornecedores)
    <br />
    <br />
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br />
    Status: {{ $fornecedores[0]['status'] }}
    <br />
    @if( !($fornecedores[0]['status'] == 'S'))
        Fornecedor Inativo
    @endif
    <br />
        CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido' }}

        <!-- $var testada não definida ou null -->
    <br />

    <br /><br />
    @unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
        Fornecedor Inativo
    @endunless
    <br />

    <br />
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br />
    Status: {{ $fornecedores[1]['status'] }}
    <br />
    @if( !($fornecedores[1]['status'] == 'S'))
        Fornecedor Inativo
    @endif
    <br />
      CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br />


@endisset
<hr>



