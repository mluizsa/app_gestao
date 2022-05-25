@extends('app.layouts.basico')

@section('titulo', 'Detalhes do Produto')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            @if(isset($produto->id))
                <p>Editar Detalhes do Produto</p>
            @else
                <p>Adicionar Detalhes do Produto</p>
            @endif
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.produto_detalhe._components.form_create_edit', ['unidades'=>$unidades])
                @endcomponent
            </div>
        </div>

    </div>

@endsection
