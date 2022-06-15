<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterProdutosRelacionamentosFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criado a coluna de produtos que vai receber a fk de fornecedores
        Schema::table('produtos',function(Blueprint $table){
            //inserir um registro de fornecedor para estalecer o relacionamento;

            $fornecedor_id = DB::table('fornecedores')->insertGetId([
                'nome' => 'Fornecedore Padrão SG',
                'site' => 'fornecedopadraosg.com.br',
                'uf' =>   'SP',
                'email' => 'contato@fornecedopadraosg.com.br'
            ]);

            $table->unsignedBigInteger('fornecedor_id')->default($fornecedor_id)->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos',function(Blueprint $table){
            $table->dropForeign('produto_fornecedor_id_foreign');
            $table->dropColumn('fornecedor_id');
        });
    }
}
