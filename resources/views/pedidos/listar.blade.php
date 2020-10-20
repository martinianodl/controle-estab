@extends('layout')

@section('cabecalho')
    Pedidos de {{$estabNome}}
@endsection

@section('conteudo')
    <a href="/estabelecimentos/{{$estabId}}/pedidos/create" class="btn btn-dark mb-2">Criar Novo</a>

    <ul class="list-group">
        @foreach($pedidos as $pedido)
            <li class="list-group-item d-flex justify-content-between">
                <div>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item list-group-item-info">{{ $pedido->data }}</li>
                        <li class="list-group-item list-group-item-primary">{{ $pedido->descricao }}</li>
                        <li class="list-group-item list-group-item-secondary">{{ $pedido->pedidoPor }}</li>
                        <li class="list-group-item list-group-item-warning">{{ $pedido->avaliacao }}</li>
                        <li class="list-group-item list-group-item-secondary">{{ $pedido->comentario }}</li>
                    </ul>
                </div>
                <span class="d-flex align-items-center">
                    <form method="post" action="/estabelecimentos/{{$estabId}}/pedidos/{{$pedido->id}}"
                          onsubmit="return confirm('Tem certeza que deseja remover o pedido?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm btn-sm mr-2">Excluir</button>
                    </form>
                    <a href="/estabelecimentos/{{$estabId}}/pedidos/{{$pedido->id}}/edit" class="btn btn-warning btn-sm mr-2">Editar</a>
                </span>
            </li>
        @endforeach
    </ul>
@endsection
