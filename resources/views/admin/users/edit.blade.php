@extends('layouts.master')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div><br />
    @endif
    <form action="{{ route('users.update',$user) }}" method="POST" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-md-8">
            <label for="user_name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="col-md-4">
            <label for="user_price" class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control" value="{{$user->email}}">
        </div>
        <div class="col-12">
            <label for="user_flavor" class="form-label">Senha</label>
            <input type="text" class="form-control" name="password" rows="3" value="{{$user->password}}">
        </div>
        <div class="col-12">
            <label for="user_descritption" class="form-label">Associação</label>
            <input class="form-control" name="association" rows="3" value="{{$user->association}}">
        </div>
        <div class="col-md-8">
            <label for="user_image" class="form-label">Permissão </label>
            <input type="text" name="permission" class="form-control" value="{{$user->permission}}">
        </div>
        <div class="botoes">
            <a type="button" href="{{ route('users.index') }}" class="btn btn-danger" style="margin-right: 1%">Cancelar</a>
            <button type="submit" class="btn btn-dark botoes"><i class="fas fa-trash"></i>
                Atualizar
            </button>
        </div>
    </form>
@endsection
