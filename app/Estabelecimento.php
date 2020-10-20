<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model {

    protected $fillable = ['nome', 'plataforma'];
    public $timestamps = false;

    public function pedidos() {
        return $this->hasMany(Pedido::class);
    }

}
