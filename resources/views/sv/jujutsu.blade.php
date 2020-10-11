@extends('app')
@section('title', 'Jujutsu')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Jujutsu</h1>
        Vi tränar en modern Jujutsustil som kombinerar självförsvar med grappling, slag/spark och nedtagningar.
        Som nybörjare kommer du att lära dig fallteknik samt skydda dig mot slag, sparkar och enkla grepp.
        De flesta övningarna utförs i par för att du ska få känna på hur teknikerna fungerar med motstånd.
        Styrkan i Jujutsu är att det är en komplett kampsport, stående och på marken.<br>
        <br>
        Vi tränar en stil som heter Kagami Ryu Jujutsu.<br>
        <br>
        Vi tillhör <a href="http://www.stjf.net" target="_blank">Svenska Taijutsu / Jujutsu Förbundet</a>

        <a href="https://www.facebook.com/groups/ukcjutsu/" target="_blank" class="external-link"><div><img src="images/fb.png" /></div><span>Facebookgrupp</span></a>
        <a href="https://www.instagram.com/jujutsu.umea" target="_blank" class="external-link"><div><img src="images/instagram.png" /></div><span>Instagram</span></a>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juju_ny1.jpg') }}" alt="Jujutsu - hiji gatame">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Träna med oss</h2>
        Även om du aldrig hållit på med kampsport tidigare eller känner dig otränad kan du vara lugn. I början lägger
        vi mycket tid på grundrörelser, fallteknik och att skydda sig själv. Med hjälp av kroppsvikten som motstånd bygger
        du successivt upp din styrka och kondition på ett roligt sätt. Vi tränar i Jujutsudräkter av bomull för att
        kläderna ska hålla för alla de kraftiga ryck som uppstår i en dojo. Du behöver naturligtvis inte dyka upp med en
        sådan på första passet utan mjukisbyxor och en t-shirt fungerar bra i början.
        <br><br>
        <strong>Har du tränat Jujutsu tidigare?</strong><br>
        I Sverige finns många olika stilar av Jujutsu, stora som små. Den främsta skillnaden mellan dessa är vart man
        har valt att lägga sitt fokus. Jämfört med många andra stilar har Kagami Ryu Jujutsu en starkare koppling till
        Judo, BJJ och Karate. Vi är med i ett förbund som består av ett trettiotal mindre stilar som träffas regelbundet
        och tar inspiration av varandra.
        <br><br>
        @lang('main.membershipFee')
        @endslot
        @slot('imageBox')
            <iframe
                    width="100%"
                    height="315"
                    src="https://www.youtube.com/embed/NFSAuNPZpOY?rel=0&amp;showinfo=0"
                    frameborder="0"
                    allowfullscreen
            >
            </iframe>
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Sparring</h2>
        Kagami Ryu Jujutsu har sju former av sparring. Vi börjar tidigt med mattbrottning (Ne waza) och Jutsu randori (självförsvar).
        När du behärskar fallteknik, blockeringar och andra grundläggande tekniker introducerar vi fler sparringformer. Vissa av
        sparringformerna kräver skydd av olika slag men det är inget du behöver införskaffa första året.
        @endslot
        @slot('imageBox')
            <iframe
                    width="100%"
                    height="315"
                    src="https://www.youtube.com/embed/O2TI7xZ4TK8?rel=0&amp;showinfo=0"
                    frameborder="0"
                    allowfullscreen
            >
            </iframe>
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Hur relaterar Jujutsu till BJJ?</h2>
            Brasiliansk Jiu-jitsu fokuserar till största delen på mattbrottning där åtminstone en av personerna
            befinner sig på marken. I Jujutsu kallar vi detta för Ne waza och det är något som vi också lägger
            stor vikt vid, både som teknikträning och som sparringform. Vår Jujutsu kompletterar BJJ väldigt bra
            eftersom vi lägger mycket tid på nedtagningar, som också är viktigt för BJJ. Flera av våra instruktörer
            tränar även BJJ.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juju_ny3.jpg') }}" alt="Jujutsu och bjj går bra ihop på bild Juji gatame ">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Hur relaterar Jujutsu till Kickboxning?</h2>
            I Kickboxning tränar man slag och sparkar samt hur man försvarar sig mot dessa. Vi tycker att även detta
            är en viktig komponent i ett modernt självförsvar så vi ägnar mycket tid åt detta område. Allt från
            korrekt slag- och sparkteknik till sparring, när grunderna finns på plats. Vår Jujutsu ger dig möjlighet
            att utvidga din kickboxning till självförsvar.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juju_ny2.jpg') }}" alt="Jujutsu och kickboxning fungerar bra ihop">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Kom och prova på</h2>
            @lang('sub.tryOutText')
            Vår Jujutsu ger dig en solid grund att stå på oavsett vad du söker i kampsportsväg.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juju_ny4.jpg') }}" alt="Jujutsu - Hiza geri">
        @endslot
    @endcomponent
    @component('instructors', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/instructors/peter.jpg'),
            'name' => 'Peter Spegel, Renshi',
            'phone' => config('app.phoneNumbers.pspegel'),
            'belt' => '||||'
        ],
        [
            'imageUrl' => URL::asset('images/instructors/arvid.jpg'),
            'name' => 'Arvid Edberg, Sensei',
            'phone' => config('app.phoneNumbers.aedberg'),
            'belt' => '||'
        ],
        [
            'imageUrl' => URL::asset('images/instructors/john.jpg'),
            'name' => 'John Nilsson, Sensei',
            'phone' => '',
            'belt' => '||'
        ]
    ]])
    @endcomponent
@endsection