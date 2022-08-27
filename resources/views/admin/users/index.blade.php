@extends('layouts.master')

@section('content')
        <div class="row justify-content:space-between">
            <h1>Usuarios</h1>   
            <div class="descricao">
                <p>Nome</p>
                <p>E-mail</p>
                <a href="{{ route('users.create') }}" class="btn btn-secondary botoes" style=" height:4vh ; width:5vw; backgroundcolor:green; margin-left:2%">
                    <i class="fas fa-search"></i>
                    Adicionar
                </a>
            </div>
        </div>
        <ul class="list-group">    
            @foreach ($users as $user)
                <tr>
                    <div class="linha">
                        <div class="dados"> 
                            <td> {{ $user->name }}</td>
                        </div>
                        <div class="dados"> 
                            <td> {{ $user->email }}</td>
                        </div>
                        <div class="botoes">
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-dark" style=" height:4vh ; width:4vw">
                                    <i class="fas fa-search"></i>
                                    &#8981;
                            </a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary" style="height:4vh ; width:4vh"><i class="fas fa-pen"></i>
                                &#128393;
                            </a>
            
                            <form class="form-delete d-flex" action="{{ route('users.destroy', $user->id) }}" method="post">
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
