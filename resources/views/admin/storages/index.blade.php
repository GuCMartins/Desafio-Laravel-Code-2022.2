@extends('layouts.master')

@section('content')
    <div class="row justify-content:space-between">
        <h1>Bombom da Lu - Estoques</h1>
        <div class="d-grid gap-2 d-md-block">
            <a href="/" type="button" class="btn btn-primary">Principal</a>
            <a href="{{ route('users.index') }}" type="botton" class="btn btn-secondary">Usuários</a>
            <a href="{{ route('products.index') }}" type="botton" class="btn btn-success">Produtos</a>
        </div>
        <div class="descricao">
            <p>Nome</p>
            <p>Quantidade</p>
            @can('create', App\Models\User::class)
                <a href="{{ route('storages.create') }}" class="btn btn-secondary botoes"
                    style=" height:4vh ; width:5vw; backgroundcolor:green">
                    <i class="fas fa-search"></i>
                    Adicionar
                </a>
            @endcan
        </div>
    </div>
    <ul class="list-group">
        @foreach ($storages as $storage)
            <tr>
                <div class="linha w-100">
                    <div class="dados">
                        <td> {{ $products[$storage->product_id-1]->name }}</td>
                    </div>
                    <div class="dados">
                        <td> {{ $storage->amount }}</td>
                    </div>
                    <div class="botoes">
                        <a href="{{ route('storages.show', $storage->id) }}" class="btn btn-dark"
                            style=" height:4vh ; width:4vw">
                            <i class="fas fa-search"></i>
                            &#8981;
                        </a>
                        @can('update', App\Models\User::class)
                            <a href="{{ route('storages.edit', $storage->id) }}" class="btn btn-primary"
                                style="height:4vh ; width:4vh"><i class="fas fa-pen"></i>
                                &#128393;
                            </a>
                        @endcan
                        @can('delete', App\Models\User::class)
                            <form class="form-delete d-flex" action="{{ route('storages.destroy', $storage->id) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" style="height:4vh ; width:4vh"><i
                                        class="fas fa-trash"></i>
                                    &#9852;
                                </button>
                            </form>
                        @endcan
                    </div>
                </div>
            </tr>
        @endforeach
    </ul>
@endsection
