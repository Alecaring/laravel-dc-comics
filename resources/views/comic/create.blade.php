@extends('layouts.app')

@section('content')
    {{-- <img src="{{ Vite::asset('resources/img/prova.webp') }}" alt=""> --}}

    <div class="w-75 m-auto mt-5">

        <form action="{{ route('comic.store') }}" method="post">
            @csrf
            <label for="nome">name</label>
            <input type="text" name="nome" id="nome">

            <label for="desc">descrizione</label>
            <input type="text" name="descrizione" id="desc">

            <button type="submit" class="btn btn-primary">clicca</button>
        </form>
    </div>
@endsection
