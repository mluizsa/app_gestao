@if(isset($produto_detalhe->id))
    <form method="post" action="{{ route('produto-detalhe.update', ['produto_detalhe' => $produto_detalhe->id ]) }}">
        @csrf
        @method('PUT')
@else
    <form method="post" action="{{ route('produto-detalhe.store') }}">
        @csrf
@endif
    <input type="text" name="produto_id" placeholder="Id do Produto" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}" class="borda-preta" />
    {{ $errors->has('produto_id') ?  $errors->first('produto_id') : '' }}
    <input type="text" name="comprimento" placeholder="Comprimento" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}" class="borda-preta" />
    {{ $errors->has('comprimento') ?  $errors->first('comprimento') : '' }}
    <input type="text" name="largura" placeholder="Largura" value="{{ $produto_detalhe->largura ?? old('largura') }}" class="borda-preta" />
    {{ $errors->has('largura') ?  $errors->first('largura') : '' }}
    <input type="text" name="altura" placeholder="Altura" value="{{ $produto_detalhe->altura ?? old('altura') }}" class="borda-preta" />
    {{ $errors->has('altura') ?  $errors->first('altura') : '' }}

    <select name="unidade_id" class="borda-preta">
        <option> -- Selecione a Unidade de Medida --</option>
        @foreach ($unidades as $unidade )
            <option value="{{ $unidade->id }}" {{ ( $produto_detalhe->unidade_id ?? old('unidade_id') == $unidade->id ) ? 'selected' : "" }} > {{ $unidade->descricao }}</option>
        @endforeach
    </select>
    {{ $errors->has('unidade_id') ?  $errors->first('unidade_id') : '' }}


    @if(isset($produto_detalhe->id))
        <button type="submit" class="borda-preta">Editar</button>
    @else
        <button type="submit" class="borda-preta">Cadastrar</button>
    @endif

</form>
