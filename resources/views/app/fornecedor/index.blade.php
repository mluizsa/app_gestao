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
    <hr>
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))

        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br />
        Status: {{ $fornecedores[$i]['status'] }}
        <br />
        @if( !($fornecedores[$i]['status'] == 'S'))
            Fornecedor Inativo
        @endif
        <br />
            CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
            <!-- $var testada não definida ou null -->
        <br />
        Telefone: ({{ $fornecedores[$i]['ddd'] }}) {{ $fornecedores[$i]['telefone'] }}
        <br />
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @case('85')
                Fortaleza -  CE
                @break
            @default
                Estado não identificado
        @endswitch
        <hr>
        <br />
        @php $i++  @endphp

    @endwhile


<p>Sintaxe for</p>

@for($i = 0; $i < 10; $i++ )
    {{ $i }}
    <br />
@endfor


<p>Sintaxe foreach</p>

    @forelse ($fornecedores as $indice => $fornecedor )

        Interação atual: {{ $loop->iteration }}
        <br />
        Fornecedor: {{ $fornecedor['nome'] }}
        <br />
        Status: {{ $fornecedor['status'] }}
        <br />
        @if( !($fornecedor['status'] == 'S'))
            Fornecedor Inativo
        @endif
        <br />
            CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
            <!-- $var testada não definida ou null -->
        <br />
        Telefone: ({{ $fornecedor['ddd'] }}) {{ $fornecedor['telefone'] }}
        <br />
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @case('85')
                Fortaleza -  CE
                @break
            @default
                Estado não identificado
        @endswitch
        <br />
        @if( $loop->first )
            Primeira interação do Loop
        @endif
        <br />

        @if( $loop->last )
            Última interação do Loop
            <br /> Total de Registros: {{ $loop->count}}
        @endif
        <br />


        <br />
        <hr>
        <br />
    @empty

    Não existe fornecedores
    @endforelse

@endisset
