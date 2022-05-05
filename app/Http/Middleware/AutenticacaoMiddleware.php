<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        echo $metodo_autenticacao.' - '.$perfil.'<br>';

        if($metodo_autenticacao == 'padrao')
        {
            echo 'Verificar o usuário e senha no banco de dados -'. $perfil.'<br>';
        }

        if($metodo_autenticacao == 'ldap')
        {
            echo 'Verificar o usuário e senha no ldap -'. $perfil.'<br>';
        }


        if($perfil == 'visitante')
        {
            echo 'Exibir alguns recursos <br>';
        }else{
            echo 'Exibir recursos do banco de dados <br>';
        }

        if(false)
        {
            return $next($request);
        }
        else
        {
            return Response('Acesso negado! Rota Exige autenticação!');
        }
    }
}
