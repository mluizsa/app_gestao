@extends('app.layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            @if(isset($produto->id))
                <p>Editar Produto</p>
            @else
                <p>Adicionar Cliente</p>
            @endif
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
                <li><a href="">Consultar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.cliente._components.form_create_edit')
                @endcomponent
            </div>
        </div>

    </div>

@endsection
