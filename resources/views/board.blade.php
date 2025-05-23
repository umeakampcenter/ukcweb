@extends('app')
@section('title', 'Styrelse')
@section('content')
    @component('contentBox')
        @slot('textBox')
            {!! $text !!}
        @endslot
        @slot('imageBox')
            <img class="board-image" src="{{ Vite::asset('resources/images/umeakampcenterlogo.png') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
@endsection
