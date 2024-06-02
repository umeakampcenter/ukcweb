@extends('app')
@section('title', $stylePage->title)
@section('content')
@foreach ($stylePage->sections as $section)
    <h1>{{ $section->title }}</h1>
    {!! $section->text !!}
@endforeach
@endsection