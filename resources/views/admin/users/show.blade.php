@extends('layouts.master')

@section('content')
    <td scope="justify-content-center align-items-center">{{ $user->name }},
        {{ $user->email }},{{ $user->association }},{{ $user->permission  }}</td>
@endsection