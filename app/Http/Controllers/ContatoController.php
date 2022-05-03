<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

        $motivo_contatos = MotivoContato::all();

        return view('site.contato',['titulo'=>'Contato (teste)', 'motivo_contato'=>$motivo_contatos]);
    }

    public function salvar(Request $request)
    {

        $regras = [
            'nome'=>'required|min:3|max:40|unique:site_contatos',
            'telefone'=>'required',
            'email'=>'email',
            'motivo_contatos_id'=>'required',
            'mensagem'=>'required|max:2000'
        ];

        $feedback = [
                'nome.min'=>'O campo precisa ter no mínimo 3 caracteres',
                'nome.max'=>'O campo precisa ter no máximo 40 caracteres',
                'nome.unique'=>'O nome já existe',

                'required'=>'O campo :attribute deve ser preenchido',
                'mensagem.max'=>'A mensagem deve ter no máximo 2000 caracteres',

                'email'=>'o email informado não é valido'
        ];


        //realizar a validação do formulário, recebidos no request
        $request->validate($regras, $feedback);

        SiteContato::create($request->all());

        return redirect()->route('site.index');
    }
}
