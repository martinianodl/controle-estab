@extends('layout')

@section('cabecalho')
    Adicionar Estabelecimento
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
    <form method="post" action="/estabelecimentos">
        @csrf
        <div class="input-group d-flex justify-content-between">
            <label class="mr-2" for="nome">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome">
            <label class="ml-2 mr-2" for="plataforma">Plataforma: </label>
            <select id="plataforma" name="plataforma">
                <option value="ifood">ifood</option>
                <option value="James">James Delivery</option>
                <option value="UberEats">UberEats</option>
                <option value="ZeDelivery">ZeDelivery</option>
                <option value="WhatsApp">WhatsApp</option>
                <option value="Instagram">Instagram</option>
                <option value="Site">Site Próprio</option>
            </select>
        </div>
        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection
