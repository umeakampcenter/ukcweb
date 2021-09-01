@extends('app')
@section('title', 'Priser')
@section('content')
    @component('contentBox')
        @slot('textBox')
            <h1>Priser</h1>
            <ul>
                <li>Om du är 14 år eller äldre får du träna alla våra stilar för 1100 kr/termin.</li>
                <li>Barnträning kostar 700 kr/termin.</li>
                <li>Du kan även vara stödmedlem för 500 kr/termin om du inte tränar aktivt.</li>
            </ul>
            <br>
            <br>
            Medlemsavgiften betalas till föreningens Swish 123 646 85 81. Ange namn, stil samt personnummer i meddelandet.
        @endslot
        @slot('imageBox')
            <img class="board-image" src="{{ URL::asset('images/umeakampcenterlogo.png') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
@endsection