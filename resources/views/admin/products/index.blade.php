@extends('layouts.master')

@section('content')
    <div class="row justify-content:space-between">
        <h1>Bombom da Lu - Produtos</h1>
        <div class="d-grid gap-2 d-md-block">
            <a href="/" type="button" class="btn btn-primary">Principal</a>
            <a href="{{ route('users.index') }}" type="botton" class="btn btn-secondary">Usuários</a>
            <a href="{{ route('storages.index') }}" type="botton" class="btn btn-success">Estoques</a>
        </div>    
        <div class="descricao">
            <p>Nome</p>
            <p>Preço</p>
            @can('create', App\Models\User::class)
                <a href="{{ route('products.create') }}" class="btn btn-secondary botoes"
                    style=" height:4vh ; width:5vw; backgroundcolor:green; margin-left:2%">
                    <i class="fas fa-search"></i>
                    Adicionar
                </a>
            @endcan
        </div>
    </div>
    <ul class="list-group">
        @foreach ($products as $product)
            <tr>
                <div class="linha">
                    <div class="dados">
                        <td> {{ $product->name }}</td>
                    </div>
                    <div class="dados">
                        <td> {{ $product->price }}</td>
                    </div>
                    <div class="botoes">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-dark"
                            style=" height:4vh ; width:4vw">
                            <i class="fas fa-search"></i>
                            &#8981;
                        </a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"
                            style="height:4vh ; width:4vh"><i class="fas fa-pen"></i>
                            &#128393;
                        </a>

                        <form class="form-delete d-flex" action="{{ route('products.destroy', $product->id) }}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" style="height:4vh ; width:4vh"><i
                                    class="fas fa-trash"></i>
                                &#9852;
                            </button>
                        </form>
                    </div>
                </div>
            </tr>
        @endforeach
    </ul>
@endsection
