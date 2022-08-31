@extends('layouts.master')

@section('content')
    <div class="show">
        <a href="{{ route('storages.index') }}" type="botton" class="btn btn-secondary">Voltar</a>
        <p>Nome : {{ $prodname->name }}</p>
        <p>Quantidade : {{ $storage->amount }}</p>
    </div>        
@endsection
