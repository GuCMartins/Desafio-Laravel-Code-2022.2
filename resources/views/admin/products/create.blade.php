@extends('layouts.master')

@section('content')
    <form action="{{ route('products.create') }}" method="post" class="row g-3">
        <div class="col-md-8">
            <label for="inputNameAddProdut" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="inputNameAddProdut"
                placeholder="Insira o nome do produto">
        </div>
        <div class="col-md-4">
            <label for="inputPriceAddProdut" class="form-label">Preço</label>
            <input type="text" name="price" class="form-control" id="inputPriceAddProdut" placeholder="R$99,99">
        </div>
        <div class="col-12">
            <label for="inputDescriptionAddProdut" class="form-label">Descrição do
                Produto</label>
            <textarea class="form-control" name="flavor" id="inputDescriptionAddProdut" rows="3"
                placeholder="Morango, Brigadeiro..."></textarea>
        </div>
        <div class="col-12">
            <label for="inputImageAddProdut" class="form-label">Imagem </label>
            <input type="text" name="picture" class="form-control" id="inputImageAddProdut"
                placeholder="Insira o nome da imagem do produto">
        </div>
        <div class="botoes">
            <a type="button" href="{{ route('products.index') }}" class="btn btn-danger"
                style="margin-right: 1%">Cancelar</a>
            <form class="form-create d-flex" action="{{ route('products.store', $product->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-dark botoes"><i class="fas fa-trash"></i>
                    Adicionar
                </button>
            </form> 
        </div>
    </form>
@endsection
