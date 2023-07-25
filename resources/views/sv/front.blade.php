@extends('app')
@section('title', 'Start')
@section('content')
<div class="slider">
    <div class="slider-img"></div>
    <div class="slide-text">
        <h1>Välkommen till Umeå Kampcenter</h1>
        <p>Umeå Kampcenter erbjuder Kagami Ryu Jujutsu och Gracie Barra Brazilian Jiu-Jitsu. Dessutom har vi gratis självförsvar för tjejer på söndagar! Som medlem får du träna alla våra stilar. Självklart får du testa på några tillfällen innan du betalar! För att träna på våra vuxenpass måste du vara minst 14 år gammal.</p>
        <p>@lang('main.semesters')</p>
    </div>
</div>
<div class="sections">
    <div class="inner">
        <div class="section-item">
            <h2>@lang('main.jujutsu')</h2>
            <div class="section-text">Jujutsu är självförsvar med grappling, slag/spark och nedtagningar.</div>
            <a href="{{ route('jujutsu') }}">@lang('main.readMore')</a>
        </div>
        <div class="section-item">
            <h2>@lang('main.bjj')</h2>
            <div class="section-text">Gracie Barra Brazilian Jiu-Jitsu fokuserar på liggande markteknik och mattkamp.</div>
            <a href="{{ route('bjj') }}">@lang('main.readMore')</a>
        </div>
        <div class="section-item">
            <h2>@lang('main.selfDefenceWithLineBreak')</h2>
            <div class="section-text">Gratis självförsvar för tjejer och transpersoner.</div>
            <a href="{{ route('selfDefence') }}">@lang('main.readMore')</a>
        </div>
        <div class="section-item">
            <h2>@lang('main.bjjChildren')</h2>
            <div class="section-text">De yngre barnen (6-9) tränar grunder i BJJ och lek. Ungdomarna (9-13) tränar teknik och sparras.</div>
            <a href="{{ route('bjjChildren') }}">@lang('main.readMore')</a>
        </div>
    </div>
</div>
<div class="time-box">
    <div class="bar-time">
        <div class="inner">
            <a href="{{ route('schedule') }}" class="time-link">Se våra träningstider</a>
        </div>
    </div>
</div>
@endsection