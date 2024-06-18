@extends('layouts.app')

@include('partials.header')
@section('content')
    <div class="d-flex align-items-center justify-content-center">
        <form class="position-relative rounded-pill border d-flex" action="">
            <div class="d-flex flex-column px-5 py-2 border-end" id="whereYouGo">
                <label for="location ms_fs"> Dove</label>
                <input class="border-0 ms_fs pe-2" type="text" name="location" placeholder="Cerca destinazione">
            </div>
            <div class="position-absolute ms_position_nav_search" id="whereYouGoModal">
                <h6 class="pb-3 ps-2">Cerca per regioni</h6>
                <div class="d-flex flex-wrap gap-3 align-items-center justify-content-center">
                    <div class="ms_card_nav">
                        <img class="logo" src="{{ Vite::asset('resources/img/flex.jpg') }}" alt="">
                        <span class="ms_fs_card py-2">Sono flessibile</span>
                    </div>
                    <div class="ms_card_nav">
                        <img class="logo" src="{{ Vite::asset('resources/img/americaDelSud.jpg') }}" alt="">
                        <span class="ms_fs_card py-2">America del Sud</span>
                    </div>
                    <div class="ms_card_nav">
                        <img class="logo" src="{{ Vite::asset('resources/img/Spagna.jpg') }}" alt="">
                        <span class="ms_fs_card py-2">Spagna</span>
                    </div>
                    <div class="ms_card_nav">
                        <img class="logo" src="{{ Vite::asset('resources/img/StatiUniti.jpg') }}" alt="">
                        <span class="ms_fs_card py-2">Stati Uniti</span>
                    </div>
                    <div class="ms_card_nav">
                        <img class="logo" src="{{ Vite::asset('resources/img/RegnoUnito.jpg') }}" alt="">
                        <span class="ms_fs_card py-2">Regno Unito</span>
                    </div>
                    <div class="ms_card_nav">
                        <img class="logo" src="{{ Vite::asset('resources/img/SudEstAsiatico.jpg') }}" alt="">
                        <span class="ms_fs_card py-2">Sud-est Asiatico</span>
                    </div>
                </div>
            </div>


            <div class="d-flex flex-column justify-content-center px-4 py-2 border-end">
                <label class="ms_fs" for="location">Check-in</label>
                <span class="text-secondary ms_fs">Aggiungi date</span>
                
            </div>


            <div class="d-flex flex-column justify-content-center px-4 py-2 border-end">
                <label class="ms_fs" for="location">Check-out</label>
                <span class="text-secondary ms_fs">Aggiungi date</span>
            </div>


            <div class="d-flex align-items-center gap-5 ps-4 pe-2 py-2">
                <div class="d-flex flex-column">
                    <label class="ms_fs" for="location">Chi</label>
                    <span class="border-0 text-secondary ms_fs pe-5" type="text" name="location">
                        Aggiungi ospiti
                    </span>
                </div>
                <div
                    class="ms_size_circle rounded-circle ms_bg_red_light d-flex align-items-center justify-content-center text-white">
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </span>
                </div>
            </div>
        </form>
    </div>
    <hr class="bg-secondary">
@endsection
