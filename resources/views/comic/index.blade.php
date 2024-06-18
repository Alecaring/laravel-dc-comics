@extends('layouts.app')

@section('content')


<div class="body">

    <div class="container_ms_index">
    
    
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
        {{-- <nav class="w-100 bg-dark py-4">
            <ul class="text-white list-group">
                <li class="list-item"><a href="{{ route('comic.index') }}">index</a></li>
                <li class="list-item"><a href="{{ route('comic.create') }}">create</a></li>
            </ul>
        </nav> --}}
        <nav class="sidebar">
            <div>

                <ul class="text-white list-groups p-0 px-3">
                    <li class="list-group-item">
                        <img class="logo_index" src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
                    </li>
                    <li class="list-group-item p-3 px-4 {{ Route::currentRouteNamed('comic.index') ? 'active' : '' }}"><a class="a" href="{{ route('comic.index') }}">Home</a></li>
                    <li class="list-group-item p-3 px-4"><a class="a" href="{{ route('comic.create') }}">Aggiungi una casa</a></li>
                    <li class="list-group-item p-3 px-4"><a class="a" href="{{ route('comic.create') }}">Modifica una casa</a></li>
                    <li class="list-group-item p-3 px-4"><a class="a" href="{{ route('comic.create') }}">Elilina una casa</a></li>
                </ul>
            </div>
            <div class="pb-5">
                <ul class="text-white list-groups">
                    <li class="list-group-item py-2 px-3"><a class="a" href="{{ route('comic.create') }}">Collaborazioni</a></li>
                    <li class="list-group-item py-2 px-3"><a class="a" href="{{ route('comic.create') }}">Assistenza clienti</a></li>
                    <li class="list-group-item py-2 px-3"><a class="a" href="{{ route('comic.create') }}">Log out</a></li>
                </ul>

            </div>
            
            
        </nav>

        {{-- ...................................................... --}}
        <div class="main">

            @foreach ($datas as $data)
                <div class="d-flex w-75 justify-content-between align-items-center m-auto">
                    <a href="{{ route('comic.show', $data->id) }}"><div class="w-50">
                        <h1>{{ $data->nome }}</h1>
                        <p>{{ $data->descrizione }}</p>
                    </div></a>
                    <div>
                        <a href="{{ route('comic.edit', $data->id) }}" class="btn btn-secondary">Modifica</a>
                        <form action="{{ route('comic.destroy', $data->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    
    
    
    </div>
</div>



@endsection
