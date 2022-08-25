@extends('layouts.master')

@section('content')
    <td scope="justify-content-center align-items-center">{{ $storage->product_id }},
        {{ $storage->amount }},{{ $storage->updated_at }}</td>
@endsection