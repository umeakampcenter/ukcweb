@extends('app')
@section('title', $stylePage->title)
@section('content')
    @foreach ($stylePage->sections as $section)
        @component('contentBox')
            @slot('textBox')
                <h1>{{ $section->title }}</h1>
                {!! $section->text !!}
            @endslot
            @slot('imageBox')
                @php
                    $sectionImage = $section->imageObject('sectionImage');
                @endphp
                @if ($sectionImage)
                    <img src="{{ ImageService::getUrl($sectionImage->uuid) }}">
                @endif
            @endslot
        @endcomponent
    @endforeach
@endsection
