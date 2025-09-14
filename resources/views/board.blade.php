@extends('app')
@section('title', $title)
@section('content')
    @component('contentBox')
        @slot('textBox')
            {!! $text !!}
        @endslot
        @slot('imageBox')
            <img class="board-image" src="/assets/ukc_logo.svg" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
@endsection
