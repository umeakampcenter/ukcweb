<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Umeå Kampcenter</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

        <style>
            body {
                /*background: rgb(42, 42, 55) url('images/fullscreen.jpg') no-repeat top center;*/
                font-family: 'Open Sans', sans-serif;
                font-weight: 400;
                margin: 0;
            }

            .page {
                margin: 0 auto;
                width: 1200px;
            }

            .page .menu {
                background: #fff;
                height: 96px;
            }

            .page .menu-items {
                text-align: right;
            }

            .page .menu-items a {
                color: #000;
                display: inline-block;
                font-weight: 600;
                height: 100%;
                padding: 1em;
                line-height: 100%;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="page">
            <div class="menu">
                <div class="logo">

                </div>
                <div class="menu-items">
                    <a href="">@lang('main.start')</a>
                    <a href="">@lang('main.jujutsu')</a>
                    <a href="">@lang('main.kickboxing')</a>
                    <a href="">@lang('main.bjj')</a>
                    <a href="">@lang('main.schedule')</a>
                </div>
            </div>
            <div class="header-image">
                <div class="welcome-box">
                    <h1>@lang('main.welcomeHeading')</h1>
                    <p>@lang('main.welcomeText')</p>
                </div>
            </div>
            <div class="sections">
                <div class="section-item">
                    <h2>@lang('main.jujutsu')</h2>
                    <p>@lang('main.jujutsuIntro')</p>
                    <a href="">@lang('main.readMore')</a>
                </div>
                <div class="section-item">
                    <h2>@lang('main.kickboxing')</h2>
                    <p>@lang('main.kickboxingIntro')</p>
                    <a href="">@lang('main.readMore')</a>
                </div>
                <div class="section-item">
                    <h2>@lang('main.bjj')</h2>
                    <p>@lang('main.bjjIntro')</p>
                    <a href="">@lang('main.readMore')</a>
                </div>
            </div>
            <div class="footer">
                <div class="partners">
                    <a href="http://www.stjf.net/" target="_blank">
                        <img src="images/stjf.png" alt="Svenska Taijutsu/Jujutsu Förbundet">
                    </a>
                    <a href="http://www.swedenkickboxing.se/" target="_blank">
                        <img src="images/skf.png" alt="Svenska Kickboxningsförbundet">
                    </a>
                    <img src="images/gb.png" alt="Gracie Barra Sweden">
                    <a href="https://budofitness.se" target="_blank">
                        <img src="images/budo_fitness.png" alt="Budo-Fitness">
                    </a>
                </div>
                <p>&copy; 2017 Umeå Kampcenter. Alla rättigheter reserverade.</p>
            </div>
        </div>
    </body>
</html>
