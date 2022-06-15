<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    //trait
    use SoftDeletes;

    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'email', 'uf'];

    public function produtos(){
        return $this->hasMany('App\Item','fornecedor_id','id');
        //return $this->hasMany('App\Item');
    }

}
