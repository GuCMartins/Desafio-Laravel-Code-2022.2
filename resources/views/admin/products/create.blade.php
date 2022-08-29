@extends('layouts.master')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div><br />
    @endif
    <form action="{{ route('products.store') }}" method="post" class="row g-3">
        @csrf
        <div class="col-md-8">
            <label for="product_name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" placeholder="Insira o nome do produto">
        </div>
        <div class="col-md-4">
            <label for="product_price" class="form-label">Preço</label>
            <input type="text" name="price" class="form-control" placeholder="R$99,99">
        </div>
        <div class="col-12">
            <label for="product_flavor" class="form-label">Sabor do
                Produto</label>
            <input class="form-control" name="flavor" rows="3" placeholder="Morango, Brigadeiro...">
        </div>
        <div class="col-12">
            <label for="product_descritption" class="form-label">Descrição do
                Produto</label>
            <input class="form-control" name="description" rows="3" placeholder="Gluten, modo de preparo...">
        </div>
        <div class="col-12">
            <label for="product_image" class="form-label">Imagem </label>
            <input type="text" name="picture" class="form-control" placeholder="Insira o nome da imagem do produto">
        </div>
        <div class="botoes">
            <a type="button" href="{{ route('products.index') }}" class="btn btn-danger"
                style="margin-right: 1%">Cancelar</a>
            <button type="submit" class="btn btn-dark botoes"><i class="fas fa-trash"></i>
                Adicionar
            </button>
        </div>
    </form>
@endsection
