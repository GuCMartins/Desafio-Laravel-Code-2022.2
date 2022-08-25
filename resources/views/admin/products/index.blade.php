@extends('layouts.master')

@section('content')
        <div class="row justify-content:space-between">   
            <h1> Produtos </h1>
            <th>Nome</th>
            <th>Preço</th>
            <th></th>
        </div>
        <ul class="list-group">    
            @foreach ($products as $product)
                <tr>
                    <div class="linha w-100">
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
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" style="height:4vh ; width:4vh"><i class="fas fa-pen"></i></a>
            
                            <form class="form-delete d-flex" action="{{ route('products.destroy', $product->id) }}" method="post">
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
