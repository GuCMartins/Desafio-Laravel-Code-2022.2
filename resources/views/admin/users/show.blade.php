@extends('layouts.master')

@section('content')
    <div class="show">
        <a href="{{ route('users.index') }}" type="botton" class="btn btn-secondary">Voltar</a>
        <p>Nome : {{ $user->name }}</p>
        <p>Sabor : {{ $user->email }}</p>
        <p>Preço : {{ $user->association }}</p>
        <p>Descrição : {{ $user->permission }}</p>
    </div>        
@endsection
