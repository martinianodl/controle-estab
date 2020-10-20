<?php

namespace App\Http\Controllers;

use App\Estabelecimento;
use App\Http\Requests\EstabelecimentosFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstabelecimentoController extends Controller {

    public function __construct() {
        return $this->middleware('auth');
    }

    public function index(Request $request) {
        $estabelecimentos = Estabelecimento::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('estabelecimentos.listar', [
            'estabelecimentos' => $estabelecimentos,
            'mensagem' => $mensagem
        ]);
    }

    public function create(){
        return view('estabelecimentos.adicionar');
    }

    public function edit($id){
        $estabelecimento = Estabelecimento::find($id);
        return view('estabelecimentos.editar', [
            'estabelecimento' => $estabelecimento
        ]);
    }

    public function update(Request $request, $id){
        $estabelecimento = Estabelecimento::find($id);
        $estabelecimento->nome = $request->nome;
        $estabelecimento->plataforma = $request->plataforma;
        $estabelecimento->save();
        $request->session()
            ->flash(
                'mensagem',
                "Estabelecimento $estabelecimento->nome atualizado com sucesso!"
            );
        return redirect()->route('listar_estab');
    }

    public function destroy(Request $request, $id){
        $estabelecimento = Estabelecimento::find($id);
        $estabelecimento->delete();
        $request->session()
            ->flash(
                'mensagem',
                "Estabelecimento $estabelecimento->nome removido com sucesso!"
            );
        return redirect()->route('listar_estab');
    }

    public function store(EstabelecimentosFormRequest $request){
        Estabelecimento::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Estabelecimento $request->nome criada com sucesso!"
            );
        return redirect()->route('listar_estab');
    }

}
