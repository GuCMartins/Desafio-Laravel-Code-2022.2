@extends('layouts.master')

@section('content')
    <td scope="justify-content-center align-items-center">{{ $product->name }},
        {{ $product->email }},{{ $product->association }},{{ $product->permission  }}</td>
@endsection