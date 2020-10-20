@extends('layout')

@section('cabecalho')
    Adicionar Pedidos
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/estabelecimentos/{{$estabId}}/pedidos">
        @csrf
        <div>
            <label class="mr-2" for="data">Data: </label>
            <input type="date" class="form-control" id="data" name="data">
            <br>
            <label class="mr-2" for="descricao">Descrição: </label><br>
            <textarea id="descricao" name="descricao"
                      rows="3" cols="75"></textarea><br>

            <label class="mr-2" for="pedidoPor">Pedidor Por: </label>
            <input type="text" class="form-control" id="pedidoPor" name="pedidoPor">
            <br>
            <label class="mr-2" for="avaliacao">Avaliação: </label><br>
            <div class="rate">
                <input type="radio" id="star5" name="avaliacao" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="avaliacao" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="avaliacao" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="avaliacao" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="avaliacao" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
            <br><br>
            <label class="mr-2" for="comentario">Comentário: </label><br>
            <textarea id="comentario" name="comentario"
                      rows="5" cols="75"></textarea>
        </div>
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection
