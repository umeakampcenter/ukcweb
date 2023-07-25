<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#bc2e2e">

    <link rel="image_src" href="http://umeakampcenter.se/images/front_long2.jpg">
    <meta name="description" content="Umeå Kampcenter samlar Kagami Ryu Jujutsu och Gracie Barra BJJ under ett tak! Centralt i Umeå vid Bågenhuset." />
    <meta property="description" content="Umeå Kampcenter samlar Kagami Ryu Jujutsu och Gracie Barra BJJ under ett tak! Centralt i Umeå vid Bågenhuset." />
    <meta property="og:description" content="Umeå Kampcenter samlar Kagami Ryu Jujutsu och Gracie Barra BJJ under ett tak! Centralt i Umeå vid Bågenhuset." />
    <meta property="og:image" content="http://umeakampcenter.se/images/front_long2.jpg" />
    <meta property="og:title" content="Umeå Kampcenter" />

    <title>Umeå Kampcenter - @yield('title', '')</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    @vite(["resources/css/default.css", "resources/css/pages.css", "resources/css/schedule.css", "resources/css/768.css", "resources/css/480.css", "resources/css/320.css"])

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    @vite(["resources/js/app.js", "resources/js/schedule.js"])
    <script type="text/javascript">
        $(document).ready(function() {
            umeakampcenter.menu.init($(".mobile-menu-btn"), $("#mobile-menu"));
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155150976-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-155150976-1');
    </script>
</head>

<body>
    <div id="header">
        <div class="inner clearfix">
            <div id="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ URL::asset('images/logo.png') }}" alt="Umeå Kampcenter">
                </a>
            </div>
            <div class="menu">
                <a href="{{ route('home') }}">@lang('main.start')</a>
                <div class="menu-item">
                    <span class="menu-activator">@lang('main.train')</span>
                    <ul>
                        <li><a href="{{ route('bjj') }}">@lang('main.bjj')</a></li>
                        <li><a href="{{ route('jujutsu') }}">@lang('main.jujutsu')</a></li>
                        <li><a href="{{ route('selfDefence') }}">@lang('main.selfDefence')</a></li>
                        <li><a href="{{ route('bjjChildren') }}">@lang('main.bjjChildren')</a></li>
                    </ul>
                </div>
                <a href="{{ route('board') }}">@lang('main.board')</a>
                <a href="{{ route('schedule') }}">@lang('main.schedule')</a>
                <a href="{{ route('pricing') }}">@lang('main.pricing')</a>
                <a href="{{ route('findUs') }}">@lang('main.findUs')</a>
                @if (true)
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
        <a href="{{ route('bjj') }}">@lang('main.bjj')</a>
        <a href="{{ route('selfDefence') }}">@lang('main.selfDefence')</a>
        <a href="{{ route('bjjChildren') }}">@lang('main.bjjChildren')</a>
        <a href="{{ route('board') }}">@lang('main.board')</a>
        <a href="{{ route('schedule') }}">@lang('main.schedule')</a>
        <a href="{{ route('pricing') }}">@lang('main.pricing')</a>
        <a href="{{ route('findUs') }}">@lang('main.findUs')</a>
        @if (true)
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
            <div class="footer-item">
                <p>&copy; 2023 Umeå Kampcenter. @lang('main.allRightsReserved').</p>
            </div>
            <div class="footer-item">
                <a href="https://goo.gl/maps/dXY9BpeeMns" target="_blank">
                    <img src="images/map.png" alt="@lang('main.findUs')">
                </a>
                <a href="http://www.facebook.com/umeakampcenter/" target="_blank">
                    <img src="images/fb.png" alt="Facebook">
                </a>
                <a href="mailto:umeakampcenterif@gmail.com">
                    <img src="images/email.png" alt="@lang('main.email')">
                </a>
            </div>
        </div>
    </div>
</body>

</html>