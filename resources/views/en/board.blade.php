@extends('app')
@section('title', 'Board')
@section('content')
    @component('contentBox')
        @slot('textBox')
            <h1>Board</h1>
            The board is the decision-making body of Umeå Kampcenter and is responsible for all its concerns.
            <br><br>
            If you have any questions for the board you can contact us by
            <a href="mailto:umeakampcenterif@gmail.com">umeakampcenterif@gmail.com</a>
            <br><br><br>
            <h2>Board members</h2>
            <ul>
                <li>
                    <strong>Head of the board</strong><br>
                    Jörgen Lindström
                </li>
                <li>
                    <strong>Secretary</strong><br>
                    
                </li>
                <li>
                    <strong>Board member</strong><br>
                    Mathias Liljeblad
                </li>
                <li>
                    <strong>Board member</strong><br>
                    Peter Spegel
                </li>
                <li>
                    <strong>Board member</strong><br>
                    Ville Nordin
                </li>
                <li>
                    <strong>Board member</strong><br>
                    Lina Öststorm
                </li>
                <li>
                    <strong>Alternate member</strong><br>
                    Jens Ottander
                </li>
                <li>
                    <strong>Alternate member</strong><br>
                    Linus Bergström
                </li>
            </ul>
            <br><br><br>
            <h2>Honorary members</h2>
            <p>For many years of service.</p>
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