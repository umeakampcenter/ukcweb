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
    <meta name="description"
        content="Umeå Kampcenter samlar Kagami Ryu Jujutsu och Gracie Barra BJJ under ett tak! Centralt i Umeå vid Bågenhuset." />
    <meta property="description"
        content="Umeå Kampcenter samlar Kagami Ryu Jujutsu och Gracie Barra BJJ under ett tak! Centralt i Umeå vid Bågenhuset." />
    <meta property="og:description"
        content="Umeå Kampcenter samlar Kagami Ryu Jujutsu och Gracie Barra BJJ under ett tak! Centralt i Umeå vid Bågenhuset." />
    <meta property="og:image" content="http://umeakampcenter.se/images/front_long2.jpg" />
    <meta property="og:title" content="Umeå Kampcenter" />

    <title>Umeå Kampcenter - @yield('title', '')</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    @vite(['resources/css/default.css', 'resources/css/pages.css', 'resources/css/schedule.css', 'resources/css/768.css', 'resources/css/480.css', 'resources/css/320.css'])

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    @vite('resources/js/schedule.js')
    <script type="module">
        $(document).ready(function() {
            $(".mobile-menu-btn").click(function() {
                $("#mobile-menu").slideToggle();
            });
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

@php
    use Illuminate\Support\Facades\DB;
    use Illuminate\Database\Query\JoinClause;

    $pageMenuOptions = DB::table('pages')
        ->join('page_translations', function (JoinClause $join) {
            $join
                ->on('pages.id', '=', 'page_translations.page_id')
                ->where('page_translations.locale', '=', App::currentLocale());
        })
        ->whereNull('pages.deleted_at')
        ->where('pages.published', '=', 1)
        ->pluck('page_translations.title as title', 'pages.linkPath as linkPath');

@endphp

<body>
    <div id="header">
        <div class="inner clearfix">
            <div id="logo">
                <a href="{{ route('front') }}">
                    <img src="/assets/logo.png" alt="Umeå Kampcenter">
                </a>
            </div>
            <div class="menu">
                <a href="{{ route('front') }}">@lang('main.start')</a>
                <div class="menu-item">
                    <span class="menu-activator">@lang('main.train')</span>
                    <ul>
                        @foreach ($pageMenuOptions as $linkPath => $title)
                            <li><a href="{!! $linkPath !!}">{{ $title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <a href="{{ route('board') }}">@lang('main.board')</a>
                <a href="{{ route('schedule') }}">@lang('main.schedule')</a>
                <a href="{{ route('pricing') }}">@lang('main.pricing')</a>
                <a href="{{ route('findUs') }}">@lang('main.findUs')</a>

                @if (App::currentLocale() === 'en')
                    <a href="/lang/sv" class="lang-switch sv">
                        Byt till svenska
                    </a>
                @else
                    <a href="/lang/en" class="lang-switch en">
                        Switch to english
                    </a>
                @endif
            </div>
            <div class="mobile-menu-btn"></div>
        </div>
    </div>
    <div id="mobile-menu">
        <a href="{{ route('front') }}">@lang('main.start')</a>
        @foreach ($pageMenuOptions as $linkPath => $title)
            <a href="{!! $linkPath !!}">{{ $title }}</a>
        @endforeach
        <a href="{{ route('board') }}">@lang('main.board')</a>
        <a href="{{ route('schedule') }}">@lang('main.schedule')</a>
        <a href="{{ route('pricing') }}">@lang('main.pricing')</a>
        <a href="{{ route('findUs') }}">@lang('main.findUs')</a>
        @if (App::currentLocale() === 'en')
            <a href="/lang/sv" class="lang-switch sv">
                Byt till svenska
            </a>
        @else
            <a href="/lang/en" class="lang-switch en">
                Switch to english
            </a>
        @endif
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div id="footer">
        <div class="inner">
            <div class="footer-item">
                <a href="https://budofitness.se/" target="_blank">
                    <img src="/assets/budo_fitness.png" alt="Budo fitness">
                </a>
            </div>
            <div class="footer-item">
                <p>&copy; 2023 Umeå Kampcenter. @lang('main.allRightsReserved').</p>
            </div>
            <div class="footer-item">
                <a href="https://goo.gl/maps/dXY9BpeeMns" target="_blank">
                    <img src="/assets/map.png" alt="@lang('main.findUs')">
                </a>
                <a href="http://www.facebook.com/umeakampcenter/" target="_blank">
                    <img src="/assets/fb.png" alt="Facebook">
                </a>
                <a href="mailto:umeakampcenterif@gmail.com">
                    <img src="/assets/email.png" alt="@lang('main.email')">
                </a>
            </div>
        </div>
    </div>
</body>

</html>
