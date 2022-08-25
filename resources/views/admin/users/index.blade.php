@extends('layouts.master')

@section('content')
        <div class="row justify-content:space-between">
            <h1>Usuarios</h1>   
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
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
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary" style="height:4vh ; width:4vh"><i class="fas fa-pen"></i></a>
            
                            <form class="form-delete d-flex" action="{{ route('users.destroy', $user->id) }}" method="post">
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
