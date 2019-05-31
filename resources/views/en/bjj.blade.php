@extends('app')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Gracie Barra BJJ</h1>
        Brazilian Jiu-jitsu is a martial art that focuses on ground fighting. We're part of
        <a href="http://graciebarra.com/" target="_blank">Gracie Barra</a>, one of
        the largest and most successful BJJ teams in the world. BJJ is a very popular competition oriented style which
        is growing tremendously with many successful competitors from Sweden. A bout start off standing where
        the players have an opportunity to gain a good position by throwing or sweeping the opponent. The remainder of
        the match takes part mostly on the ground where both players fight to gain a dominant position before submitting
        the opponent with a joint lock or choke.
        <ul>
            <li>
                We are a part of
                <a href="http://graciebarra.com/" target="_blank">Gracie Barra Sweden</a>
            </li>
            <li>
                Our Brazilian Jiu-jitsu
                <a href="https://www.facebook.com/GracieBarraUmea" target="_blank">Facebook group</a>
            </li>
        </ul>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/bjj2.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Train with us</h2>
        BJJ revolves a lot around developing your own arsenal of techniques that flow well into each other. You don't
        have to compete, the style works great as a form of physical exercise. At first you get to familiarize yourself
        with the most common positions, neat ways to escape from bad positions and other fundamental knowledge. You'll
        quickly notice your movements getting smoother and your endurance increasing when you start rolling with us,
        so don't worry if you feel stiff as a board! We normally train in BJJ kimonos made to withstand the pulling and
        tugging. Regulars training clothes without zippers works fine util you've decided to continue.
        <br><br>
        <strong>Have you trained martial arts before?</strong><br>
        Regardless of your training ambitions we can help you to reach your goals. If you've trained a grappling art
        before you will recognize yourself but it's likely that you'll learn to work from new positions and grips.
        Through our contacts in Europe and the US we strive to put together the best seminars in northern Sweden so you
        can learn from the elite first hand.
        <br><br>
        @lang('main.membershipFee')
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/bjj5.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>What's the training like?</h2>
        Every training sessions starts with a common warm up tailored to the sport we're practicing. This involves
        how to breakfall, pair drills and mobility exercises. After the warm up we split the group in beginners and
        advanced students so the beginners can learn the basics first. The techniques are practiced in pairs with
        possibilities to ask questions and explore the moves on your own. We like to end the session with
        situational sparring so you get to try out the new moves with a little resistance. After the session we have
        free training where you can spar or repeat the techniques you've learned.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/bjj3.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Try for yourself!</h2>
            @lang('sub.tryOutText')
            Our BJJ works great on its own or as a complement to our standup arts.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/bjj1.jpg') }}" alt="Umeå Kampcenter">
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
            'imageUrl' => URL::asset('images/instructors/piri.jpg'),
            'name' => 'Piri Nigeus',
            'phone' => config('app.phoneNumbers.pnigeus'),
            'belt' => '',
            'beltColor' => config('app.beltColors.brown')
        ],
        [
            'imageUrl' => URL::asset('images/person.png'),
            'name' => 'Moa Carlsson Gustafsson',
            'phone' => '',
            'belt' => '',
            'beltColor' => config('app.beltColors.blue')
        ]
    ]])
    @endcomponent
@endsection