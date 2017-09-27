@extends('app')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Kickboxning</h1>
        Kickboxning var ursprungligen ett regelsystem för att olika stilar som tränar slag och spark ska kunna mötas
        och tävla mot varandra. Idag är det en egen träningsform som lånar tekniker från boxning, karate och andra
        kontaktsporter. Hos oss kan du träna både som motionär och som tävlingsintresserad. Som medlemmar i Svenska
        Kickboxningsförbundet kan du deltaga i alla tävlingar som hålls runt om i landet.
        <ul>
            <li>
                Vi tillhör
                <a href="http://www.swedenkickboxing.se" target="_blank">Svenska kickboxingsförbundet</a>
            </li>
            <li>
                Kickboxningssektionens
                <a href="https://www.facebook.com/groups/383422005110541" target="_blank">Facebookgrupp</a>
            </li>
        </ul>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/kick3.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Träna med oss</h2>
        Vi börjar med de mest grundläggande teknikerna som hur du ska stå och förflytta dig. Därefter bygger vi på med
        slag och sparkar för att sedan sätta in dem i sparringliknande sammanhang. Även om du aldrig haft på dig ett
        par boxningshandskar förut kommer du snabbt att lära dig hur du skyddar dig på bästa sätt och samtidigt vara
        offensiv. Dessutom får du bra kondition på samma gång!
        <br><br>
        <strong>Har du tränat kampsport tidigare?</strong><br>
        Eftersom kickboxning uppstod när flera olika stilar skulle mötas under samma regler har det mycket gemensamt
        med andra sporter som involverar slag och spark. Om du tränat en sport där slag mot ansiktet inte är tillåtet
        kommer du att lära dig att justera din gard för att skydda dig på bästa sätt. Alternativt om du kört boxning
        tidigare kommer sparkar snart att vävas in i de kombinationer du redan kan så att du kan bli en komplett
        kickboxare!
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/kick2.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Hur ser en träning ut?</h2>
        Under större delen av terminen tränar nybörjare och avancerade utövare var för sig på olika tider. Under
        uppvärmningen mjukar vi upp de muskler som används flitigast som vader, lår, mage, axlar, etc. Själva träningen
        består till stor del av parövningar där vi drillar offensiva och defensiva tekniker om vart annat. Vi använder
        även olika slags mitsar (särskilda stryktåliga kuddar) för att träna på intensiteten i slagen och sparkarna.
        Avancerade utövare som hunnit införskaffa skydd kör även fri sparring för att lära sig använda teknikerna mer
        tävlingsnära.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/kick1.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Kom och prova på</h2>
            @lang('sub.tryOutText')
            Kickboxning är en väldigt bra grund att ha i sitt stående game och kan kompletteras med våra andra stilar
            om du vill lära dig självförsvar eller marktekniker.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/kick4.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('instructors', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/instructors/stefan.jpg'),
            'name' => 'Stefan Eriksson',
            'phone' => config('app.phoneNumbers.seriksson'),
            'belt' => null
        ]
    ]])
    @endcomponent
@endsection