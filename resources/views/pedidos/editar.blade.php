@extends('layout')

@section('cabecalho')
    Editar Pedido
@endsection

@section('conteudo')
    <form method="post" action="/estabelecimentos/{{$estabId}}/pedidos/{{$pedido->id}}">
        @csrf
        @method('PUT')
        <div>
            <label class="mr-2" for="data">Data: </label>
            <input type="date" class="form-control" id="data" name="data" value="{{$pedido->data}}">
            <br>
            <label class="mr-2" for="descricao">Descrição: </label><br>
            <textarea id="descricao" name="descricao"
                      rows="3" cols="75">{{$pedido->descricao}}</textarea><br>

            <label class="mr-2" for="pedidoPor">Pedidor Por: </label>
            <input type="text" class="form-control" id="pedidoPor" name="pedidoPor" value="{{$pedido->pedidoPor}}">
            <br>
            <label class="mr-2" for="avaliacao">Avaliação: </label><br>
            <div class="rate">
                <input type="radio" id="star5" name="avaliacao" value="5" {{$pedido->avaliacao == '5' ? 'checked' : ''}}/>
                <label for="star5" title="5 stars">5 stars</label>
                <input type="radio" id="star4" name="avaliacao" value="4" {{$pedido->avaliacao == '4' ? 'checked' : ''}}/>
                <label for="star4" title="4 stars">4 stars</label>
                <input type="radio" id="star3" name="avaliacao" value="3" {{$pedido->avaliacao == '3' ? 'checked' : ''}}/>
                <label for="star3" title="3 stars">3 stars</label>
                <input type="radio" id="star2" name="avaliacao" value="2" {{$pedido->avaliacao == '2' ? 'checked' : ''}}/>
                <label for="star2" title="2 stars">2 stars</label>
                <input type="radio" id="star1" name="avaliacao" value="1" {{$pedido->avaliacao == '1' ? 'checked' : ''}}/>
                <label for="star1" title="1 star">1 star</label>
            </div>
            <br><br>
            <label class="mr-2" for="comentario">Comentário: </label><br>
            <textarea id="comentario" name="comentario"
                      rows="5" cols="75">{{$pedido->comentario}}</textarea>
        </div>
        <button class="btn btn-primary mt-2">Editar</button>
    </form>
@endsection
