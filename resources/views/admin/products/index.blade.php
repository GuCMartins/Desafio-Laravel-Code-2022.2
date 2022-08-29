@extends('layouts.master')

@section('content')
        <div class="row">   
            <h1>Bombom da Lu - Produtos </h1>
            <div class="descricao">
                <p>Nome</p>
                <p>Preço</p>
                <a href="{{ route('products.create') }}" class="btn btn-secondary botoes" style=" height:4vh ; width:5vw; backgroundcolor:green; margin-left:7%">
                    <i class="fas fa-search"></i>
                    Adicionar
                </a>
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
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-dark" style=" height:4vh ; width:4vw">
                                    <i class="fas fa-search"></i>
                                    &#8981;
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" style="height:4vh ; width:4vh"><i class="fas fa-pen"></i>
                                &#128393;
                            </a>
            
                            <form class="form-delete d-flex" action="{{ route('products.destroy', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" style="height:4vh ; width:4vh"><i class="fas fa-trash"></i>
                                    &#9852;
                                </button>
                            </form> 
                        </div>
                    </div>    
                </tr>
            @endforeach
        </ul>    
@endsection
