<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Umeå Kampcenter</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/pages.css') }}">

    </head>
    <body>
        <div id="header">
            <div class="inner clearfix">
                <div id="logo"><img src="{{ URL::asset('images/logo.png') }}" alt="Umeå Kampcenter"></div>
                <div class="menu">
                    <a href="">@lang('main.start')</a>
                    <a href="">@lang('main.jujutsu')</a>
                    <a href="">@lang('main.kickboxing')</a>
                    <a href="">@lang('main.bjj')</a>
                    <a href="">@lang('main.schedule')</a>
                </div>
            </div>
        </div>
        <div class="slider">
            <div class="slide-text">
                <h1>@lang('main.welcomeHeading')</h1>
                <p>@lang('main.welcomeText')</p>
            </div>
        </div>
        <div id="page">
            <div class="sections clearfix">
                <div class="inner">
                    <div class="section-item">
                        <h2>@lang('main.jujutsu')</h2>
                        <div class="section-text">@lang('main.jujutsuIntro')</div>
                        <a href="">@lang('main.readMore')</a>
                    </div>
                    <div class="section-item">
                        <h2>@lang('main.kickboxing')</h2>
                        <div class="section-text">@lang('main.kickboxingIntro')</div>
                        <a href="">@lang('main.readMore')</a>
                    </div>
                    <div class="section-item">
                        <h2>@lang('main.bjj')</h2>
                        <div class="section-text">@lang('main.bjjIntro')</div>
                        <a href="">@lang('main.readMore')</a>
                    </div>
                </div>
            </div>
            <div class="time-box">
                <div class="inner">
                    <div class="time-link">Se våra träningstider här</div>
                </div>
            </div>
            <div class="fb-feed">
                @foreach ($facebookPosts as $post)
                    <div class="fb-item">
                        <h5>Umeå Kampcenter</h5>
                        <div class="fb-time">{{ $post["createDateTime"] }}</div>
                        <div class="fb-text">{{ $post["message"] }}</div>
                        <div class="fb-link">
                            @if ($post["url"])
                                <a href="{{ $post["url"] }}" target="_blank">@lang('main.showImages')</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div id="footer">
            <div class="inner">
                <div class="footer-item">
                    <a href="https://budofitness.se/" target="_blank">
                        <img src="images/budo_fitness.png" alt="Budo fitness">
                    </a>
                </div>
                <div class="footer-item"><p>&copy; 2017 Umeå Kampcenter. Alla rättigheter reserverade.</p></div>
                <div class="footer-item">
                    <a href="http://maps.google.com/" target="_blank">
                        <img src="images/map.png" alt="Hitta hit">
                    </a>
                    <a href="http://www.facebook.com/umeakampcenter/" target="_blank">
                        <img src="images/fb.png" alt="Facebook">
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
