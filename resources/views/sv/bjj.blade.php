@extends('app')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Gracie Barra BJJ</h1>
        Brasiliansk Jiu-jitsu är en kampsport som fokuserar på markkamp. Vi tillhör organisationen
        <a href="http://graciebarra.com/" target="_blank">Gracie Barra</a> som är
        ett av de största och mest framgångsrika BJJ-teamen i världen. BJJ är en väldigt populär tävlingsform som växer
        explosionsartat med många framgångsrika utövare från Sverige. Tävlingarna inleds stående där de båda tävlande
        har möjlighet att skaffa sig en bra position genom att kasta eller svepa den andra. Därefter utspelar sig större
        delen av matchen på marken där båda kämpar för att få en dominant position och sedan låsa ut den andra med
        tekniker mot leder eller hals.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/bjj2.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Träna med oss</h2>
        BJJ kretsar mycket kring att bygga upp en individuell repertoar av tekniker som funkar väl ihop. Vi har inga
        krav på att du måste tävla utan stilen fungerar även väldigt bra som motionsform. Till en början får du bekanta
        dig med de vanligaste positionerna som du kommer att hamna i, smarta sätt att ta sig ur ett underläge och andra
        fundamentala kunskaper. Du kommer snabbt märka att du blir smidigare och uthålligare när du börjar brottas hos
        oss, så var inte orolig om du är stel som en pinne! Vi tränar vanligen i BJJ-dräkter som är gjorda för att klara
        av alla drag och ryck som uppstår när vi brottas. Från början går det bra med långbyxor och en t-shirt för att
        minimera brännsår från mattan.
        <br><br>
        <strong>Har du tränat kampsport tidigare?</strong><br>
        Oavsett vad du har för ambitioner med din träning kan vi hjälpa dig att nå dit. Om du tränat grappling sedan
        tidigare kommer du att känna igen tänket men det är sannolikt att du kommer att få lära dig att jobba från nya
        positioner och grepp. Genom våra kontakter i Europa och USA strävar vi efter att hålla Norrlands bästa läger så
        att du kan få tips från eliten first hand.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/bjj5.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Hur ser en träning ut?</h2>
        Varje pass börjar med en gemensam uppvärmning som passar den sport som vi utövar. Det kan t ex röra sig om
        fallteknik, pardrillar eller mobilitetsövningar. Därefter delar vi upp oss i nybörjare och avancerade så att de
        som är nya får lära sig grunderna först. Teknikgenomgångar varvas med träning i par så att det både finns chans
        att ställa frågor och att utforska teknikerna på egen hand. Vi avslutar gärna med lite situationssparring så
        att du får testa de nya teknikerna med lite motstånd. Därefter finns det utrymme att sparras fritt eller
        repetera tekniker om man hellre känner för det.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/bjj3.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Självförsvar för tjejer</h2>
            Varje söndag erbjuder vi kostnadsfri självförsvarsträning för tjejer från 14 år och uppåt. Vi lär ut
            välbeprövade tekniker hämtade från bland annat Brasiliansk Jiu-jitsu som du kan använda för att försvara
            dig mot en fysiskt starkare person. Träningen består till stor del av parövningar där du lär dig skydda dig
            och ta dig undan i olika scenarion. För att du ska få en så realistisk träning som möjligt kan du även få
            testa teknikerna mot erfarna motståndare om du vill.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/selfdef.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Kom och prova på</h2>
            @lang('sub.tryOutText')
            Vår BJJ fungerar bra både som egen stil och som komplement till stående kampsportsformer.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/bjj1.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('instructors', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/person.png'),
            'name' => 'Mattias Sandström',
            'phone' => config('app.phoneNumbers.msandstrom'),
            'belt' => '',
            'beltColor' => config('app.beltColors.brown')
        ],
        [
            'imageUrl' => URL::asset('images/person.png'),
            'name' => 'Piri Nigeus',
            'phone' => config('app.phoneNumbers.pnigeus'),
            'belt' => '',
            'beltColor' => config('app.beltColors.purple')
        ],
        [
            'imageUrl' => URL::asset('images/person.png'),
            'name' => 'Matte Liljeblad',
            'phone' => config('app.phoneNumbers.mliljeblad'),
            'belt' => '',
            'beltColor' => config('app.beltColors.blue')
        ]
    ]])
    @endcomponent
@endsection