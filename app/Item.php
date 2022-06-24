<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    public function produtoDetalhe()
    {
        return $this->hasOne('App\ItemDetalhe','produto_id','id');
    }

    public function fornecedor()
    {
        return $this->belongsTo('App\Fornecedor');
    }

    public function pedidos()
    {
        return $this->BelongsToMany('App\Pedido', 'pedidos_produtos', 'produto_id', 'pedido_id');

        /*
            3 paramento, representa o nome da fk da tabela mapeado pelo model da tabela de relacionamento
            4 paramento, representa o nome da fk da tabela mapeada pelo model utilizada no relacionamento que estamos implementando
        */
    }

}
