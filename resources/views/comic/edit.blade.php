@extends('layouts.app')

@section('content')
<div class="w-75 m-auto mt-5">
    <form action="{{ route('comic.update', $comic->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nome">Name</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome', $comic->nome) }}" required>

        <label for="descrizione">Descrizione</label>
        <input type="text" name="descrizione" id="descrizione" value="{{ old('descrizione', $comic->descrizione) }}" required>

        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
</div>
@endsection
