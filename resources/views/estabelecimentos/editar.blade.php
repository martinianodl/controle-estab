@extends('layout')

@section('cabecalho')
    Editar Estabelecimento
@endsection

@section('conteudo')
    <form method="post" action="/estabelecimentos/{{$estabelecimento->id}}">
        @csrf
        @method('PUT')
        <div class="input-group d-flex justify-content-between">
            <label class="mr-2" for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{$estabelecimento->nome}}">
            <label class="ml-2 mr-2" for="plataforma">Plataforma: </label>
            <select id="plataforma" name="plataforma">
                <option value="ifood" {{$estabelecimento->plataforma == 'ifood' ? 'selected' : ''}}>ifood</option>
                <option value="James" {{$estabelecimento->plataforma == 'James' ? 'selected' : ''}}>James Delivery</option>
                <option value="UberEats" {{$estabelecimento->plataforma == 'UberEats' ? 'selected' : ''}}>UberEats</option>
                <option value="ZeDelivery" {{$estabelecimento->plataforma == 'ZeDelivery' ? 'selected' : ''}}>ZeDelivery</option>
                <option value="WhatsApp" {{$estabelecimento->plataforma == 'WhatsApp' ? 'selected' : ''}}>WhatsApp</option>
                <option value="Instagram" {{$estabelecimento->plataforma == 'Instagram' ? 'selected' : ''}}>Instagram</option>
                <option value="Site" {{$estabelecimento->plataforma == 'Site' ? 'selected' : ''}}>Site Próprio</option>
            </select>
        </div>
        <button class="btn btn-primary mt-2">Editar</button>
    </form>
@endsection
