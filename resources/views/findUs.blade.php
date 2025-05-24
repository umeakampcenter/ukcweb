@extends('app')
@section('title', 'Hitta till oss')
@section('content')
    @component('contentBox')
        @slot('textBox')
            {!! $text !!}
        @endslot
        @slot('imageBox')
            <iframe src="{!! $googleMaps !!}" width="600" height="450" frameborder="0" style="border:0"
                allowfullscreen></iframe>
            <iframe src="{!! $streetView !!}" width="600" height="450" frameborder="0" style="border:0"
                allowfullscreen></iframe>
        @endslot
    @endcomponent
@endsection
