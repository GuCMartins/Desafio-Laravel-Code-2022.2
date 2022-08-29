@extends('layouts.master')

@section('content')
        <div class="row justify-content:space-between">
            <h1>Estoques</h1>   
            <th>Nome</th>
            <th>Quantidade</th>
            @can('create',App\Models\User::class)
                    <a href="{{ route('storages.create') }}" class="btn btn-secondary botoes" style=" height:4vh ; width:5vw; backgroundcolor:green; margin-left:2%">
                        <i class="fas fa-search"></i>
                        Adicionar
                    </a>
                @endcan    
        </div>
        <ul class="list-group">    
            @foreach ($storages as $storage)
                <tr>
                    <div class="linha w-100">
                        <div class="dados"> 
                            <td> {{ $storage->product_id }}</td>
                        </div>
                        <div class="dados"> 
                            <td> {{ $storage->amount }}</td>
                        </div>
                        <div class="botoes">
                            <a href="{{ route('storages.show', $storage->id) }}" class="btn btn-dark" style=" height:4vh ; width:4vw">
                                    <i class="fas fa-search"></i>
                                    &#8981;
                            </a>
                            <a href="{{ route('storages.edit', $storage->id) }}" class="btn btn-primary" style="height:4vh ; width:4vh"><i class="fas fa-pen"></i></a>
            
                            <form class="form-delete d-flex" action="{{ route('storages.destroy', $storage->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" style="height:4vh ; width:4vh"><i class="fas fa-trash"></i></button>
                            </form> 
                        </div>
                    </div>    
                </tr>
            @endforeach
        </ul>    
@endsection
