@extends('layout')

@section('cabecalho')
    Estabelecimentos
@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="/estabelecimentos/create" class="btn btn-dark mb-2">Criar Novo</a>

    <ul class="list-group">
        @foreach($estabelecimentos as $estab)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <ul class="list-group list-group-horizontal">
                      <li class="list-group-item list-group-item-info">{{ $estab->nome }}</li>
                      <li class="list-group-item list-group-item-secondary">{{ $estab->plataforma }}</li>
                    </ul>
                </div>
                <span class="d-flex align-items-center">
                    <form method="post" action="/estabelecimentos/{{$estab->id}}"
                        onsubmit="return confirm('Tem certeza que deseja remover {{ $estab->nome }}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm btn-sm mr-2">Excluir</button>
                    </form>
                    <a href="/estabelecimentos/{{$estab->id}}/edit" class="btn btn-warning btn-sm mr-2">Editar</a>
                    <a href="/estabelecimentos/{{$estab->id}}/pedidos" class="btn btn-primary btn-sm">Ver Pedidos</a>
                </span>
            </li>
        @endforeach
    </ul>
@endsection
