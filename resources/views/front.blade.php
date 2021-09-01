@php
/**
 * @var $facebookPosts array[]
 */
@endphp
@extends('app')
@section('title', 'Start')
@section('content')
<div class="slider">
    <div class="slider-img"></div>
    <div class="slide-text">
        <h1>@lang('main.welcomeHeading')</h1>
        <p>@lang('main.welcomeText')</p>
    </div>
</div>
<div class="sections">
    <div class="inner">
        <div class="section-item">
            <h2>@lang('main.jujutsu')</h2>
            <div class="section-text">@lang('main.jujutsuIntro')</div>
            <div class="section-text-start">@lang('main.jujutsuStart')</div>
            <a href="{{ route('jujutsu') }}">@lang('main.readMore')</a>
        </div>
        <div class="section-item">
            <h2>@lang('main.bjj')</h2>
            <div class="section-text">@lang('main.bjjIntro')</div>
            <div class="section-text-start">@lang('main.bjjStart')</div>
            <a href="{{ route('bjj') }}">@lang('main.readMore')</a>
        </div>
        <div class="section-item">
            <h2>@lang('main.selfDefenceWithLineBreak')</h2>
            <div class="section-text">@lang('main.selfDefenceIntro')</div>
            <div class="section-text-start">@lang('main.selfDefenceStart')</div>
            <a href="{{ route('selfDefence') }}">@lang('main.readMore')</a>
        </div>
        <div class="section-item">
            <h2>@lang('main.bjjChildren')</h2>
            <div class="section-text">@lang('main.bjjChildrenIntro')</div>
            <div class="section-text-start">@lang('main.bjjChildrenStart')</div>
            <a href="{{ route('bjjChildren') }}">@lang('main.readMore')</a>
        </div>
    </div>
</div>
<div class="time-box">
   <div class="bar-time">
       <div class="inner">
           <a href="{{ route('schedule') }}" class="time-link">@lang('main.seeTrainingSessions')</a>
       </div>
    </div>
</div>
@endsection