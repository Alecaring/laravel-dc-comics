
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic->titolo }}</h1>
        <p>{{ $comic->descrizione }}</p>
    </div>
@endsection