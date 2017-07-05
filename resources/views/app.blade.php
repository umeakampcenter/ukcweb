<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Umeå Kampcenter</title>

        <script
                src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
        <script type="text/javascript" src="{{ URL::asset('js/schedule.js') }}"></script>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('css/app.min.css') }}">
    </head>
    <body>
        <div id="header">
            <div class="inner clearfix">
                <div id="logo"><a href="/"><img src="{{ URL::asset('images/logo.png') }}" alt="Umeå Kampcenter"></a></div>
                <div class="menu">
                    <a href="/">@lang('main.start')</a>
                    <a href="/jujutsu">@lang('main.jujutsu')</a>
                    <a href="">@lang('main.kickboxing')</a>
                    <a href="">@lang('main.bjj')</a>
                    <a href="/schedule">@lang('main.schedule')</a>
                    @if ($isSwedish)
                        <a href="/lang/en">Switch to english</a>
                    @else
                        <a href="/lang/sv">Byt till svenska</a>
                    @endif
                </div>
            </div>
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
