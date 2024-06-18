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
                        <li class="list-group-item p-3 px-4 {{ Route::currentRouteNamed('comic.index') ? 'active' : '' }}"><a
                                class="a" href="{{ route('comic.index') }}">Home</a></li>
                        <li class="list-group-item p-3 px-4"><a class="a" href="{{ route('comic.create') }}">Aggiungi
                                una casa</a></li>
                        <li class="list-group-item p-3 px-4"><a class="a" href="{{ route('comic.create') }}">Modifica
                                una casa</a></li>
                        <li class="list-group-item p-3 px-4"><a class="a" href="{{ route('comic.create') }}">Elilina
                                una casa</a></li>
                    </ul>
                </div>
                <div class="pb-5">
                    <ul class="text-white list-groups">
                        <li class="list-group-item py-2 px-3"><a class="a"
                                href="{{ route('comic.create') }}">Collaborazioni</a></li>
                        <li class="list-group-item py-2 px-3"><a class="a"
                                href="{{ route('comic.create') }}">Assistenza clienti</a></li>
                        <li class="list-group-item py-2 px-3"><a class="a" href="{{ route('comic.create') }}">Log
                                out</a></li>
                    </ul>

                </div>


            </nav>

            {{-- ...................................................... --}}
            <div class="main">
                <h1 class="w-75 m-auto py-5">Le tue case</h1>
                <div class="row gap-4 d-flex justify-content-center mt-1">


                    @foreach ($datas as $data)
                    <div class="card px-0 col-5">
                        <img src="{{ $data->image }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">{{ $data->nome }}</h5>
                                <p class="card-text pb-3">{{ $data->descrizione }}</p>
                            </div>
                            <div>
                                <a href="{{ route('comic.show', $data->id) }}" class="btn btn-primary">visita</a>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>



        </div>
    </div>
@endsection
