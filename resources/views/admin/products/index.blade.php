@extends('layouts.master')

@section('content')
        <div class="row">   
            <th>Especificações do produto</th>
            <th></th>
        </div>    
        @foreach ($products as $product)
            <tr>
                <div class="row d-grid gap-2 d-md-block">
                    <td scope="justify-content-center align-items-center">{{ $product->name }}</td>
                    <td class="justify-content-start name-itens-table">{{ $product->price }}</td>
                    <td class="d-flex justify-content-end colum-bottons-table">
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
                    </td>
                </div>    
            </tr>
        @endforeach
@endsection
