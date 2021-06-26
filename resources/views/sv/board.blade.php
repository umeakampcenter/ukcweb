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
                    Birgith Stenbäck
                </li>
                <li>
                    <strong>Kassör</strong><br>
                    Peter Spegel
                </li>
                <li>
                    <strong>Ledamot</strong><br>
                    Mattias Liljeblad
                </li>
                <li>
                    <strong>Ledamot</strong><br>
                    Ville Nordin
                </li>
                <li>
                    <strong>Suppleant</strong><br>
                    Arvid Edberg
                </li>
                <li>
                    <strong>Suppleant</strong><br>
                    Stefan Eriksson
                </li>
                <li>
                    <strong>Suppleant</strong><br>
                    Moa Carlsson Gustafsson
                </li>
            </ul>
        @endslot
        @slot('imageBox')
            <img class="board-image" src="{{ URL::asset('images/umeakampcenterlogo.png') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
@endsection