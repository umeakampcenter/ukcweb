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
<img src="{{ ImageService::getUrl($section->imageObject('image')->uuid) }}">
@endslot
@endcomponent
@component('contentBox')
@endforeach
@endsection