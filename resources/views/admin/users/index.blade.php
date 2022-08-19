@extends('layouts.master')

@section('content')
        <th>Nome</th>
        <th>E-mail</th>
        <th></th>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="options d-flex justify-content-center gap-1">
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-dark">
                        <i class="fas fa-search"></i>
                    </a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
 
                    <form class="form-delete d-inline-block" action="{{ route('users.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
@endsection