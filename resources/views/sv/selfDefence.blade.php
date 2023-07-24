@extends('app')
@section('title', 'Självförsvar för tjejer')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Självförsvar för tjejer</h1>
        Vår vision är att alla tjejer och transpersoner ska känna sig trygga, överallt!
        Denna vision når vi bland annat genom att träna in effektiva och tillförlitliga tekniker som gör att du kan
        skydda dig mot och känna igen hotfulla situationer.
        Vi vill även lyfta frågan om vad självförsvar är samt hur vi kan backa och lyfta varandra likväl som oss själva.
        <ul>
            <li>
                Självförsvar för tjejers
                <a href="https://www.facebook.com/umeasjalvforsvar" target="_blank">Facebookgrupp</a>
            </li>
        </ul>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/selfdef1.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Träna med oss</h2>
        Under passen delar vi med oss av tekniker från Brasiliansk jiujitsu, en kampsport som använder teknik och
        hävarmar för att ge en fysiskt svagare person en chans mot en större och starkare angripare. Vi kommer bland
        annat titta på hur du kan göra det så svårt som möjligt för en person att dra in dig eller knuffa dig till
        platser du inte känner dig säker på, hur du tar dig loss från olika grepp och effektivt tar dig upp från marken.
        Teknikerna vi använder oss av är hämtade från grunderna i Brasiliansk jiujitsu som används av klubbar runtom i
        världen. Ingenting av det vi går igenom är påhittat av oss själva utan beprövat i träning, tävling och
        självförsvarssituationer.
        <br><br>
        Eftersom ett självförsvar inte är en engångs-vaccination utan en serie tekniker vi övar in genom mängdträning så
        får du bättre resultat desto fler träningspass du deltar på. Det är och kommer alltid vara gratis, vilket vi
        tycker är väldigt viktigt.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/selfdef2.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Kom och prova på</h2>
            Självförsvar för tjejer är gratis och ingen föranmälan behövs.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/selfdef.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('instructors', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/instructors/mattias.jpg'),
            'name' => 'Mattias Sandström',
            'phone' => '',
            'belt' => null,
        ],
        [
            'imageUrl' => URL::asset('images/instructors/mimmi.jpg'),
            'name' => 'Mimmi Larsson',
            'phone' => '',
            'belt' => null,
        ],
        [
            'imageUrl' => URL::asset('images/instructors/hanna.jpg'),
            'name' => 'Hanna Johansson',
            'phone' => '',
            'belt' => null,
        ],
        [
            'imageUrl' => URL::asset('images/person.png'),
            'name' => 'Moa Carlsson Gustafsson',
            'phone' => '',
            'belt' => null,
        ],
        [
            'imageUrl' => URL::asset('images/person.png'),
            'name' => 'Johan Lorentzon',
            'phone' => '',
            'belt' => null,
        ]
    ]])
    @endcomponent
@endsection