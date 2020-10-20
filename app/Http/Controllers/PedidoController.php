<?php

namespace App\Http\Controllers;

use App\Estabelecimento;
use App\Http\Requests\PedidosFormRequest;
use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
    }

    public function index(Request $request, $estabId) {
        $pedidos = Pedido::query()
            ->where('estabelecimento_id', $estabId)
            ->orderByDesc('data')
            ->get();
        $estabelecimento = Estabelecimento::find($estabId);
        return view('pedidos.listar', [
            'pedidos' => $pedidos,
            'estabId' => $estabId,
            'estabNome' => $estabelecimento->nome
        ]);
    }

    public function create($estabId){
        return view('pedidos.adicionar', [
            'estabId' => $estabId
        ]);
    }

    public function edit($estabId, $id){
        $pedido = Pedido::find($id);
        return view('pedidos.editar', [
            'pedido' => $pedido,
            'estabId' => $estabId
        ]);
    }

    public function update(Request $request, $estabId, $id){
        $pedido = Pedido::find($id);
        $pedido->descricao = $request->descricao;
        $pedido->data = $request->data;
        $pedido->pedidoPor = $request->pedidoPor;
        $pedido->avaliacao = $request->avaliacao;
        $pedido->comentario = $request->comentario;
        $pedido->save();
        return redirect()->route('listar_pedidos', [
            'estabId' => $estabId
        ]);
    }

    public function destroy($id, $estabId){
        $pedido = Pedido::find($id);
        $pedido->delete();
        return redirect()->route('listar_pedidos', [
            'estabId' => $estabId
        ]);
    }

    public function store(PedidosFormRequest $request, $estabId){
        $pedido = new Pedido($request->all());
        $estabelecimento = Estabelecimento::find($estabId);
        $estabelecimento->pedidos()->save($pedido);
        return redirect()->route('listar_pedidos', [
            'estabId' => $estabId
        ]);
    }

}
