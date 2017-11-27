@php
/**
 * @var $scripts string[]
 * @var $stylesheets string[]
 * @var $isSwedish bool
 */
@endphp
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="image_src" href="http://umeakampcenter.se/images/front_long2.jpg">
        <meta property="description" content="Umeå Kampcenter samlar stilarna Jujutsu, BJJ och Kickboxning under ett tak! Centralt i Umeå vid Bågenhuset." />
        <meta property="og:description" content="Umeå Kampcenter samlar stilarna Jujutsu, BJJ och Kickboxning under ett tak! Centralt i Umeå vid Bågenhuset." />
        <meta property=”og:image” content=”http://umeakampcenter.se/images/front_long2.jpg” />
        <meta property=”og:title” content=”Umeå Kampcenter” />

        <title>Umeå Kampcenter</title>

        <script
                src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
        @foreach ($scripts as $script)
        <script type="text/javascript" src="{{ $script }}"></script>
        @endforeach
        <script type="text/javascript">
            $(document).ready(function () {
                umeakampcenter.menu.init($(".mobile-menu-btn"), $("#mobile-menu"));
            });
        </script>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        @foreach ($stylesheets as $stylesheet)
        <link rel="stylesheet" href="{{ $stylesheet }}">
        @endforeach
    </head>
    <body class="lang-{{ app()->getLocale() }}">
        <div id="header">
            <div class="inner clearfix">
                <div id="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ URL::asset('images/logo.png') }}" alt="Umeå Kampcenter">
                    </a>
                </div>
                <div class="menu">
                    <a href="{{ route('home') }}">@lang('main.start')</a>
                    <a href="{{ route('jujutsu') }}">@lang('main.jujutsu')</a>
                    <a href="{{ route('kickboxing') }}">@lang('main.kickboxing')</a>
                    <a href="{{ route('bjj') }}">@lang('main.bjj')</a>
                    <a href="{{ route('schedule') }}">@lang('main.schedule')</a>
                    @if ($isSwedish)
                        <a href="{{ route('setLanguage', ['language' => 'en']) }}" class="lang-switch en">
                            Switch to english
                        </a>
                    @else
                        <a href="{{ route('setLanguage', ['language' => 'sv']) }}" class="lang-switch sv">
                            Byt till svenska
                        </a>
                    @endif
                </div>
                <div class="mobile-menu-btn"></div>
            </div>
        </div>
        <div id="mobile-menu">
            <a href="{{ route('home') }}">@lang('main.start')</a>
            <a href="{{ route('jujutsu') }}">@lang('main.jujutsu')</a>
            <a href="{{ route('kickboxing') }}">@lang('main.kickboxing')</a>
            <a href="{{ route('bjj') }}">@lang('main.bjj')</a>
            <a href="{{ route('schedule') }}">@lang('main.schedule')</a>
            @if ($isSwedish)
                <a href="{{ route('setLanguage', ['language' => 'en']) }}" class="lang-switch en">Switch to english</a>
            @else
                <a href="{{ route('setLanguage', ['language' => 'sv']) }}" class="lang-switch sv">Byt till svenska</a>
            @endif
        </div>
        <div class="content">
        @yield('content')
        </div>
        <div id="footer">
            <div class="inner">
                <div class="footer-item">
                    <a href="https://budofitness.se/" target="_blank">
                        <img src="images/budo_fitness.png" alt="Budo fitness">
                    </a>
                </div>
                <div class="footer-item"><p>&copy; 2017 Umeå Kampcenter. @lang('main.allRightsReserved').</p></div>
                <div class="footer-item">
                    <a href="https://goo.gl/maps/dXY9BpeeMns" target="_blank">
                        <img src="images/map.png" alt="@lang('main.findUs')">
                    </a>
                    <a href="http://www.facebook.com/umeakampcenter/" target="_blank">
                        <img src="images/fb.png" alt="Facebook">
                    </a>
                    <a href="mailto:c05psl@gmail.com">
                        <img src="images/email.png" alt="@lang('main.email')">
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
