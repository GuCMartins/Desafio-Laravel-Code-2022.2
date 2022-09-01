@extends('layouts.master')

@section('content')
    <div class="show">
        <a href="{{ route('users.index') }}" type="botton" class="btn btn-secondary">Voltar</a>
        <p>Nome : {{ $user->name }}</p>
        <p>Email : {{ $user->email }}</p>
        <p>Associação : {{ $user->association }}</p>
        @if ($user->permission == true)
            <p>Permissão : Admnistrador</p>
        @else
            <p>Permissão : Cliente</p>
        @endif
    </div>
@endsection
