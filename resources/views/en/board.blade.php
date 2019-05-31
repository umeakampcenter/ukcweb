@extends('app')
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
                    Henrik Vincent
                </li>
                <li>
                    <strong>Secretary</strong><br>
                    Birgith Stenbäck
                </li>
                <li>
                    <strong>Cashier</strong><br>
                    Johan Lorentzon
                </li>
                <li>
                    <strong>Board member</strong><br>
                    Mattias Liljeblad
                </li>
                <li>
                    <strong>Board member</strong><br>
                    Peter Spegel
                </li>
                <li>
                    <strong>Board member</strong><br>
                    Mimmi Larsson
                </li>
                <li>
                    <strong>Alternate member</strong><br>
                    Arvid Edberg
                </li>
                <li>
                    <strong>Alternate member</strong><br>
                    Stefan Eriksson
                </li>
                <li>
                    <strong>Alternate member</strong><br>
                    Moa Carlsson Gustafsson
                </li>
            </ul>
        @endslot
        @slot('imageBox')
            <img class="board-image" src="{{ URL::asset('images/umeakampcenterlogo.png') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
@endsection