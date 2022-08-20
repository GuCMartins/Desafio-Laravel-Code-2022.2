@extends('layouts.master')

@section('content')
        <div class="row">   
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        </div>    
        @foreach ($users as $user)
            <tr>
                <div class="row d-grid gap-2 d-md-block">
                    <td scope="justify-content-center align-items-center">{{ $user->name }}</td>
                    <td class="justify-content-start name-itens-table">{{ $user->email }}</td>
                    <td class="d-flex justify-content-end colum-bottons-table">
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-dark" style=" height:4vh ; width:4vw">
                                <i class="fas fa-search"></i>
                        </a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary" style="height:4vh ; width:4vh"><i class="fas fa-pen"></i></a>
        
                        <form class="form-delete d-flex" action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" style="height:4vh ; width:4vh"><i class="fas fa-trash"></i></button>
                        </form> 
                    </td>
                </div>    
            </tr>
        @endforeach
@endsection
