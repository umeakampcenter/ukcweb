@extends('app')
@section('title', 'BJJ')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>BJJ barnträning</h1>
        Vi erbjuder barnträning inom Brasiliansk Jiu-Jitsu för åldrarna 7-10 år. Här kombinerar vi grunderna i BJJ med lek och skoj.<br>
        <br>
        Målet är att hitta glädje i träningen! Anmälan sker via vår Facebook eller vår <a href="mailto:umeakampcenterif@gmail.com">mejl</a> och kostar 700 kr/termin.
        @endslot
        @slot('imageBox')
        <img src="{{ URL::asset('images/bjj_children.jpg') }}" alt="BJJ barn">
        @endslot
    @endcomponent
    @component('instructors', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/instructors/mattias.jpg'),
            'name' => 'Mattias Sandström',
            'phone' => config('app.phoneNumbers.msandstrom'),
            'belt' => '',
            'beltColor' => config('app.beltColors.black')
        ],
        [
            'imageUrl' => URL::asset('images/person.png'),
            'name' => 'Mimmi Larsson',
            'phone' => '',
            'belt' => '',
            'beltColor' => config('app.beltColors.blue')
        ],
        [
            'imageUrl' => URL::asset('images/person.png'),
            'name' => 'Hanna Johansson',
            'phone' => '',
            'belt' => null
        ]
    ]])
    @endcomponent
@endsection