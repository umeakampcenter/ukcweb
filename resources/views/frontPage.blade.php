@extends('app')
@section('title', 'Start')
@section('content')
<div class="slider">
    <div class="slider-img"></div>
    <div class="slide-text">
        <h1>{{ $title }}</h1>
        {!! $intro !!}
    </div>
</div>
<div class="sections">
    <div class="inner">
        @foreach ($styles as $style)
        <div class="section-item">
            <h2>{{ $style->title }}</h2>
            <div class="section-text">{!! $style->intro !!}</div>
            <a href="{{ $style->linkPath }}">@lang('main.readMore')</a>
        </div>
        @endforeach
    </div>
</div>
<div class="time-box">
    <div class="bar-time">
        <div class="inner">
            <a href="{{ route('schedule') }}" class="time-link">@lang('main.trainingTimes')</a>
        </div>
    </div>
</div>
@endsection