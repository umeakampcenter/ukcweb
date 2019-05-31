@php
/**
 * @var $facebookPosts array[]
 */
@endphp
@extends('app')
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
            <h2>@lang('main.kickboxing')</h2>
            <div class="section-text">@lang('main.kickboxingIntro')</div>
            <div class="section-text-start">@lang('main.kickboxingStart')</div>
            <a href="{{ route('kickboxing') }}">@lang('main.readMore')</a>
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
    </div>
</div>
<div class="time-box">
   <div class="bar-time">
       <div class="inner">
           <a href="{{ route('schedule') }}" class="time-link">@lang('main.seeTrainingSessions')</a>
       </div>
    </div>
</div>
@if ($facebookPosts)
<div class="fb-feed clearfix">
    <div class="inner">
        <h3>@lang('main.latestFromFacebook')</h3>
        @foreach ($facebookPosts as $post)
            <div class="fb-item">
                <a href="https://www.facebook.com/umeakampcenter/" target="_blank"><h5>Umeå Kampcenter</h5></a>
                <div class="fb-time">{{ $post["createDateTime"]->format('j F Y H:i') }}</div>
                <div class="fb-text">{!! nl2br($post["message"]) !!}</div>
                <div class="fb-link">
                    @if ($post["url"])
                        <a href="{{ $post["url"] }}" target="_blank">@lang('main.showPhotos')</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif
@endsection