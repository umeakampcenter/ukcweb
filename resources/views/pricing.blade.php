@extends('app')
@section('title', $page->title)
@section('content')
    <div class="ukc-pricing">
        {!! $page->renderBlocks() !!}
    </div>
@endsection
