<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso!';
});*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobrenos');


Route::get('/contato', 'ContatoController@contato');

/**
 * Verbos http:
 * get
 * post
 * put
 * patch
 * delete
 * options
 */

//nome, categoria, assunto e mensagem
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}',
    function(string $nome, string $categoria, string $assunto, string $mensagem){
        echo 'Estamos aqui: '.$nome.':: Categoria: '.$categoria.':: Assunto: '.$assunto.':: Mensagem: '.$mensagem;
    }
);
