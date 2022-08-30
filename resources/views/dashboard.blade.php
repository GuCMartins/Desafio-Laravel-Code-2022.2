<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>You're logged in!</p>
                    <p></p>
                    <a href="{{ route('users.index') }}" type="button" class="btn btn-primary">Usuários</a>
                    <a href="{{ route('products.index') }}" type="botton" class="btn btn-secondary">Produtos</a>
                    <a href="{{ route('storages.index') }}" type="botton" class="btn btn-success">Estoques</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
