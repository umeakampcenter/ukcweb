@extends('app')
@section('title', 'Start')
@section('content')
<div class="slider">
    <div class="slider-img"></div>
    <div class="slide-text">
        <h1>Welcome to Umeå Kampcenter</h1>
        <p>Umeå Kampcenter offers Kagami Ryu Jujutsu and Gracie Barra Brazilian Jiu-Jitsu. We also offer free self-defence for women on sundays! As a member you can train all our styles. Trying out our classes are free. Adult classes are for age 14 and up.</p>
        <p>@lang('main.semesters')</p>
    </div>
</div>
<div class="sections">
    <div class="inner">
        <div class="section-item">
            <h2>@lang('main.jujutsu')</h2>
            <div class="section-text">Jujutsu is self defence with grappling, striking and takedowns.</div>
            <a href="{{ route('jujutsu') }}">@lang('main.readMore')</a>
        </div>
        <div class="section-item">
            <h2>@lang('main.bjj')</h2>
            <div class="section-text">Gracie Barra Brazilian Jiu-Jitsu focuses on ground work and fighting on the ground.</div>
            <a href="{{ route('bjj') }}">@lang('main.readMore')</a>
        </div>
        <div class="section-item">
            <h2>@lang('main.selfDefenceWithLineBreak')</h2>
            <div class="section-text">Free self-defence for women and transsexuals.</div>
            <a href="{{ route('selfDefence') }}">@lang('main.readMore')</a>
        </div>
        <div class="section-item">
            <h2>@lang('main.bjjChildren')</h2>
            <div class="section-text">The younger children (6-9) train fundamentals of BJJ and play. Youths train technique and sparr.</div>
            <a href="{{ route('bjjChildren') }}">@lang('main.readMore')</a>
        </div>
    </div>
</div>
<div class="time-box">
    <div class="bar-time">
        <div class="inner">
            <a href="{{ route('schedule') }}" class="time-link">Look at our training sessions</a>
        </div>
    </div>
</div>
@endsection