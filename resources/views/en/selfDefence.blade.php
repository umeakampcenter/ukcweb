@extends('app')
@section('title', 'Self-defence for women')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Self-defence for women</h1>
        Our goal is that all women and transsexuals can feel safe, everywhere!
        One way to reach this goal is to teach you how to protect yourself and recognise threatening situations which we
        do by training different techniques that are efficient and trustworthy.
        During these sessions we also want to lift questions about self-defence, what it can be and how we can support
        each other as well as our self.
        <ul>
            <li>
                Self-defence for women
                <a href="https://www.facebook.com/gbumeasjalvforsvar/" target="_blank">Facebook group</a>
            </li>
        </ul>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/selfdef1.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Train with us</h2>
        During our sessions we foremost use techniques from the martial art Brazilian jiujitsu. One of the main traits
        of Brazilian jiujitsu is that the techniques it uses makes it possible for a person that is smaller and weaker
        to hold its’ own against someone that’s bigger and stronger. During training we’ll among other things look at
        what you can do if someone tries to push or drag you to a place where you don’t want to be, how to break grips
        and how to get away in an efficient way. These techniques are well-tested and used in a lot of gyms around the
        world which means that they have been proven reliable during practices, competitions and self-defence
        situations.
        <br><br>
        The self-defence isn’t something you learn in a day. It’s better to come once instead of none but since it’s a
        series of techniques which we practise multiple times you will have a better result if you participate on a
        regular basis. It will always be for free, which we think is very important.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/selfdef2.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Try for yourself!</h2>
            Self-defence for women is free and no advance notification is needed.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/selfdef.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('instructors', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/person.png'),
            'name' => 'Mattias Sandström',
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
            'name' => 'Mimmi Larsson',
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