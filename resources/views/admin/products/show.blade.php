@extends('layouts.master')

@section('content')
    <div class="show">
        <a href="{{ route('products.index') }}" type="botton" class="btn btn-secondary">Voltar</a>
        <p>Nome : {{ $product->name }}</p>
        <p>Sabor : {{ $product->flavor }}</p>
        <p>Preço : {{ $product->price }}</p>
        <p>Descrição : {{ $product->description }}</p>
        <img src="public\img\{{$product->picture}}.jpg" class="card-img-top center" alt="...">
    </div>        
@endsection
