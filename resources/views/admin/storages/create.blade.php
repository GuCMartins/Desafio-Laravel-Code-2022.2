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
    <form action="{{ route('storages.store') }}" method="post" class="row g-3">
        @csrf
        <div class="col-md-8">
            <label for="product_name" class="form-label">Nome</label>
            <input type="text" name="prouct_id" class="form-control" placeholder="Insira o nome do produto">
        </div>
        <div class="col-md-4">
            <label for="storage_amount" class="form-label">Quantidade</label>
            <input type="text" name="amount" class="form-control" placeholder="R$99,99">
        </div>
        <div class="botoes">
            <a type="button" href="{{ route('products.index') }}" class="btn btn-danger"
                style="margin-right: 1%">Cancelar</a>
            <button type="submit" class="btn btn-dark botoes"><i class="fas fa-trash"></i>
                Adicionar
            </button>
        </div>
        <select name="product_id" id="type_id" class="form-control select2" >
            <option></option>
            @foreach ($products as $product)
                <option value={{ $product->id }}>{{ $product->name }}</option>
            @endforeach
        </select>
    </form>
@endsection
