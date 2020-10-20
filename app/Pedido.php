<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {

    protected $fillable = [
        'descricao',
        'data',
        'pedidoPor',
        'avaliacao',
        'comentario'
    ];
    public $timestamps = false;

    public function estabelecimento(){
        return $this->belongsTo(Estabelecimento::class);
    }

}
