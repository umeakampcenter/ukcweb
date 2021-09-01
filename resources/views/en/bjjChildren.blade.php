@extends('app')
@section('title', 'BJJ')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>BJJ children classes</h1>
        We offer children classes in Brazilian Jiu-Jitsu for ages 7-10. The children classes combine the fundamentals of BJJ with play and fun.<br>
        <br>
        The goal is to have fun training! Sign up on Facebook or by <a href="mailto:umeakampcenterif@gmail.com">mailing us</a>. The fee for children classes is 700 SEK per semester.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/bjj_children.jpg') }}" alt="BJJ children">
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