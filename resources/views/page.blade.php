@extends('app')
@section('title', $page->title)
@section('content')
    {!! $page->renderBlocks() !!}
@endsection
