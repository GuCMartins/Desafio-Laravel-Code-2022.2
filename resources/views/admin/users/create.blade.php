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
    <form action="{{ route('users.store') }}" method="post" class="row g-3">
        @csrf
        <div class="col-md-8">
            <label for="user_name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" placeholder="Insira o nome do usuario">
        </div>
        <div class="col-md-4">
            <label for="user_email" class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control" placeholder="ex:a@a.com">
        </div>
        <div class="col-12">
            <label for="user_password" class="form-label">Senha</label>
            <textarea class="form-control" name="password" rows="3" placeholder="ex:SenhaSecreta123"></textarea>
        </div>
        <div class="col-12">
            <label for="user_association" class="form-label">Associação</label>
            <textarea class="form-control" name="association" rows="3" placeholder="ex:Bombom da Lu"></textarea>
        </div>
        <select name="product_id" id="type_id" class="form-control select2">
            <option></option>
            <option value=0>Cliente</option>
            <option value=1>Administrador</option>
        </select>
        <div class="botoes">
            <a type="button" href="{{ route('users.index') }}" class="btn btn-danger" style="margin-right: 1%">Cancelar</a>
            <button type="submit" class="btn btn-dark botoes"><i class="fas fa-trash"></i>
                Adicionar
            </button>
        </div>
    </form>
@endsection
