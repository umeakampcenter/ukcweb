@extends('app')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Jujutsu</h1>
        För oss på Umeå Kampcenter är Jujutsu all form av obeväpnad kamp. Vår målsättning är att du som utövare ska
        känna dig trygg oavsett vart fighten äger rum. Därför tränar vi inte bara självförsvar utan även all form av
        grappling, slag och spark samt nedtagningar. Som utövare av BJJ, Judo, Karate eller liknande kommer du
        definitivt att känna igen dig!
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/RploeM.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Träna med oss</h2>
        Om du aldrig hållit på med någon kampsport tidigare eller känner dig otränad kan du vara lugn. Vi börjar från
        början med korrekt fallteknik och hjälper dig att komma i form. Vi ägnar stor uppmärksamhet åt varje enskild
        elev så att du får tydliga instruktioner där du behöver. Vi tränar i Jujutsudräkter av bomull för att kläderna
        ska hålla för alla de kraftiga ryck som uppstår i en dojo. Du behöver naturligtvis inte dyka upp med en sådan
        på första passet utan långbyxor och en t-shirt fungerar bra tills du bestämt dig.
        <br><br>
        <strong>Har du tränat Jujutsu tidigare?</strong><br>
        I Sverige finns många olika stilar av Jujutsu, stora som små. På Umeå Kampcenter har vi valt att ta fram en
        egen Jujutsustil. Det innebär att vi själva styr över inriktningen och vilka tekniker som ska finnas med.
        Självklart är vi uppbackade av ett stilobundet och ideellt förbund som låter oss åka på inspirerande läger
        och hjälper oss med svartbältesgaderingar.
        @endslot
        @slot('imageBox')
            <iframe
                    width="560"
                    height="315"
                    src="https://www.youtube.com/embed/QS31agF4fx8?rel=0&amp;showinfo=0"
                    frameborder="0"
                    allowfullscreen>
            </iframe>
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Om vår stil</h2>
            Teknikmässigt kommer du att känna igen dig en hel del från andra stilar. Beroende på vart du har tränat
            tidigare kommer du att få sparras mer och bredda dina kunskaper utanför det som traditionellt betraktas
            som Jujutsu. Med en kort beslutskedja finns det även möjlighet att vara med och påverka träningens innehåll.
            <br><br>
            <strong>Sparring</strong><br>
            Vi vill att du som utövare ska få en djup förståelse för hur teknikerna fungerar med motstånd. Därför är
            sparring en stor del av våra träningspass redan tidigt i din Jujutsuresa. Vi ser till att du har de
            förutsättningar som krävs och skador är extremt sällsynta.
            <br><br>
            Ett axplock av våra sparringformer:
            <ul>
                <li>Självförsvar mot vanliga angrepp som oftast slutar med att angriparen låses fast nere på marken.</li>
                <li>Kast med olika grader av motstånd (Judo/fristilsbrottning)</li>
                <li>Stående slag och spark (Karate/Kickboxning)</li>
                <li>Knäbrottning (Judo/BJJ)</li>
            </ul>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/RploeM.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Gradering och bältessystemet</h2>
            För att det ska vara tydligt för dina träningskamrater vad du behärskar kommer du att bära ett bälte.
            När vi åker på läger signalerar detta bälte hur avancerade tekniker du kan hantera för någon som inte
            känner dig. Hemma på klubben tränar alla med varandra helt prestigelöst så att erfarenheter delas på
            bästa sätt.
            <br><br>
            Vi är tydlig med förväntningarna på våra elever. Hos oss får du tillgång till ett kompendie med alla
            tekniker som du ska kunna till nästa bältesgrad. Vi filmar även alla våra tekniker ifall du behöver
            fräscha upp minnet inför graderingen. Själva graderingen är en speciell företeelse där du visar upp
            allt du har lärt dig under ett par intensiva timmar för att förhoppningsvis förtjäna ett nytt bälte.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/RploeM.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Kom och prova på</h2>
            Du är alltid välkommen att prova på, ingen föranmälan krävs. På vår klubb får du träna i två veckor innan
            du behöver betala medlemsavgiften. Som medlem hos oss får du träna alla våra stilar om du önskar.
            Vår Jujutsu ger dig en bra grund att stå på och går väldigt bra ihop med våra andra stilar -
            BJJ och Kickboxning.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/RploeM.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('trainers', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/peter.png'),
            'name' => 'Peter Spegel, Renshi',
            'phone' => '070-2870297',
            'belt' => '||||'
        ],
        [
            'imageUrl' => URL::asset('images/person.png'),
            'name' => 'Arvid Edberg, Sensei',
            'phone' => '076-815 70 78',
            'belt' => '|'
        ],
        [
            'imageUrl' => URL::asset('images/person.png'),
            'name' => 'John Nilsson, Sensei',
            'phone' => '',
            'belt' => '|'
        ]
    ]])

    @endcomponent
@endsection