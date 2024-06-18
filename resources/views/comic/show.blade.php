
@extends('layouts.app')

@section('content')
    <div class="container p-0 d-flex flex-column align-items-center justify-content-center">
        <a href="{{ route('comic.edit', $comic->id) }}" type="submit" class="btn btn-primary my-4">Modifica</a>
        <img src="{{ $comic->image }}" alt="">
        <h1>{{ $comic->nome }}</h1>
        <p>{{ $comic->descrizione }}</p>
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->adress }}</p>
        <p>{{ $comic->bedroom }}</p>
        <p>{{ $comic->bathroom }}</p>
        <p>{{ $comic->square_meters }}</p>
        <p>{{ $comic->property_type }}</p>
        <p>{{ $comic->status }}</p>
        <p>{{ $comic->built_year }}</p>
    </div>
@endsection