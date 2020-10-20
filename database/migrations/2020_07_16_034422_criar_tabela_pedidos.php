<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPedidos extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pedidos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->date('data');
            $table->string('pedidoPor');
            $table->string('avaliacao');
            $table->string('comentario');
            $table->integer('estabelecimento_id');

            $table->foreign('estabelecimento_id')
                ->references('id')
                ->on('estabelecimentos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('pedidos');
    }
}
