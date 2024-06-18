@extends('layouts.app')

@section('content')
<nav class="w-100 bg-dark py-4">
    <ul class="text-white list-group">
        <li class="list-item"><a href="{{ route('comic.index') }}">index</a></li>
        <li class="list-item"><a href="{{ route('comic.create') }}">create</a></li>
    </ul>
</nav>
@foreach ($datas as $data)
<div class="d-flex w-75 justify-content-between align-items-center m-auto">
    <div class="w-50">
        <h1>{{ $data->nome }}</h1>
        <p>{{ $data->descrizione }}</p>
    </div>
    <div>
        <a href="{{ route('comic.edit', $data->id) }}" class="btn btn-secondary">Modifica</a>
        <a href="{{ route('comic.edit', $data->id) }}" class="btn btn-danger">Cancella</a>
    </div>
</div>
<hr>
@endforeach
@endsection