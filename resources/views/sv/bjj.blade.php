@extends('app')
@section('title', 'BJJ')
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
<ul>
    <li>
        Vi tillhör
        <a href="http://graciebarra.com/" target="_blank">Gracie Barra Sweden</a>
    </li>
    <li>
        BJJ-sektionens
        <a href="https://www.facebook.com/GracieBarraUmea" target="_blank">Facebookgrupp</a>
    </li>
</ul>
@endslot
@slot('imageBox')
<img src="{{ Vite::asset('resources/images/bjj2.jpg') }}" alt="Umeå Kampcenter">
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
<br><br>
@lang('main.membershipFee')
@endslot
@slot('imageBox')
<img src="{{ Vite::asset('resources/images/bjj5.jpg') }}" alt="Umeå Kampcenter">
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
<img src="{{ Vite::asset('resources/images/bjj3.jpg') }}" alt="Umeå Kampcenter">
@endslot
@endcomponent
@component('contentBox')
@slot('textBox')
<h2>Kom och prova på</h2>
@lang('sub.tryOutText')
Vår BJJ fungerar bra både som egen stil och som komplement till stående kampsportsformer.
@endslot
@slot('imageBox')
<img src="{{ Vite::asset('resources/images/bjj1.jpg') }}" alt="Umeå Kampcenter">
@endslot
@endcomponent
@component('instructors', ['persons' => [
[
'imageUrl' => Vite::asset('resources/images/instructors/mattias.jpg'),
'name' => 'Mattias Sandström',
'phone' => config('app.phoneNumbers.msandstrom'),
'belt' => '',
'beltColor' => config('app.beltColors.black')
],
[
'imageUrl' => Vite::asset('resources/images/person.png'),
'name' => 'Moa Carlsson Gustafsson',
'phone' => '',
'belt' => '',
'beltColor' => config('app.beltColors.blue')
]
]])
@endcomponent
@endsection