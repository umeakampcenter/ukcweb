@extends('app')
@section('title', 'Styrelse')
@section('content')
    @component('contentBox')
        @slot('textBox')
            <h1>Styrelse</h1>
            Styrelsen är föreningens beslutande organ och ansvarar för föreningens angelägenheter.
            <br><br>
            Om du har några frågor till styrelsen kan du kontakta oss via
            <a href="mailto:umeakampcenterif@gmail.com">umeakampcenterif@gmail.com</a>
            <br><br><br>
            <h2>Styrelsemedlemmar</h2>
            <ul>
                <li>
                    <strong>Ordförande</strong><br>
                    Henrik Vincent
                </li>
                <li>
                    <strong>Sekreterare</strong><br>
                    Arvid Edberg
                </li>
                <li>
                    <strong>Ledamot</strong><br>
                    Mattias Liljeblad
                </li>
                <li>
                    <strong>Ledamot</strong><br>
                    Peter Spegel
                </li>
                <li>
                    <strong>Ledamot</strong><br>
                    Ville Nordin
                </li>
                <li>
                    <strong>Ledamot</strong><br>
                    Lina Öststorm
                </li>
                <li>
                    <strong>Suppleant</strong><br>
                    Simon Wennberg
                </li>
            </ul>
            <br><br><br>
            <h2>Hedersmedlemmar</h2>
            <p>För lång och trogen tjänst.</p>
            <ul>
                <li>Lasse Häggblom</li>
                <li>Cathrine Häggblom</li>
                <li>Birgith Stenbäck</li>
            </ul>
        @endslot
        @slot('imageBox')
            <img class="board-image" src="{{ URL::asset('images/umeakampcenterlogo.png') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
@endsection