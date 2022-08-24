@extends('layouts.master')

@section('content')
    <td scope="justify-content-center align-items-center">{{ $product->name }},
        {{ $product->flavor }},{{ $product->price }},{{ $product->picture  }}, {{ $product->description  }}</td>
@endsection