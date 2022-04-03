@extends('app')
@section('title', 'Jujutsu')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Jujutsu</h1>
        We train a modern style of Jujutsu that combines self-defence with grappling, striking and takedowns.
        As a beginner you will learn breakfalls and how to protect yourself against strikes and simple holds.
        Most exercises are performed in pairs to get a feeling for how the techniques work with resistance.
        The strength of Jujutsu is that it's a complete martial art, standing and on the ground.<br>
        <br>
        Our style is called Kagami Ryu Jujutsu.<br>
        <br>
        We are a part of the <a href="https://www.stjf.se/" target="_blank">Swedish Taijutsu / Jujutsu Federation</a>

        <a href="https://www.facebook.com/groups/ukcjutsu/" target="_blank" class="external-link"><div><img src="images/fb.png" /></div><span>Facebook group</span></a>
        <a href="https://www.instagram.com/jujutsu.umea" target="_blank" class="external-link"><div><img src="images/instagram.png" /></div><span>Instagram</span></a>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juju_ny1.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Train with us</h2>
        Even if you've never trained martial arts before or if you're feeling out of shape, don't worry. In the
        beginning we spend a lot of time on basic movement, breakfalls and protecting yourself. You will gradually
        improve your strength and endurance in a fun way with body weight excersises. We train in Jujutsu suits made of
        cotton that can withstand the tugging motions in a dojo. Of course you don't have to turn up in one of those
        on your first session. Regular training clothes work fine in the beginning.
        <br><br>
        <strong>Have you trained Jujutsu before?</strong><br>
        There are many different styles of Jujutsu in Sweden, both large and small ones. The main difference between
        these is the direction that they've chosen. Kagami Ryu Jujutsu have stronger ties to Judo, BJJ and Karate than
        most styles. You are free to keep your current belt rank when you train with us!
        <br><br>
        We belong to a federation of many small styles that meet regularly to share ideas with one another.
        <br><br>
        @lang('main.membershipFee')
        @endslot
        @slot('imageBox')
            <iframe
                    width="100%"
                    height="315"
                    src="https://www.youtube.com/embed/NFSAuNPZpOY?rel=0&amp;showinfo=0"
                    frameborder="0"
                    allowfullscreen
            >
            </iframe>
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Sparring</h2>
        Kagami Ryu Jujutsu has seven forms of sparring. You will be introduced to ground fighting (Ne waza) and self-defence
        sparring (Jutsu randori) early on. More advanced forms of sparring are added when you have learned to fall properly
        and protect yourself. Some of these sparring forms require protection (gloves, shin pads, etc.) but you don't have
        to get these your first year of training with us. One class each week is dedicated to standup sparring where we
        mostly work on takedowns and striking.
        @endslot
        @slot('imageBox')
            <iframe
                    width="100%"
                    height="315"
                    src="https://www.youtube.com/embed/O2TI7xZ4TK8?rel=0&amp;showinfo=0"
                    frameborder="0"
                    allowfullscreen
            >
            </iframe>
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>How does Jujutsu relate to BJJ?</h2>
            Brazilian Jiu-jitsu mainly focuses on groundwork where at least on person is on the ground. This is called
            Ne waza in Jujutsu and it's something that we also put a lot of effort into, both as technique training and
            as form of sparring. Out Jujutsu fits very well together with BJJ since we devote a lot of time to takedowns
            which is important in BJJ as well. Several of our instructors train BJJ too.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juju_ny3.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Try for yourself!</h2>
            @lang('sub.tryOutText')
            Our Jujutsu gives you a solid foundation regardless of what you're looking for in a martial art.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juju_ny2.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('instructors', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/instructors/peter.jpg'),
            'name' => 'Peter Spegel, Renshi',
            'phone' => config('app.phoneNumbers.pspegel'),
            'belt' => '|||||'
        ],
        [
            'imageUrl' => URL::asset('images/instructors/arvid.jpg'),
            'name' => 'Arvid Edberg, Sensei',
            'phone' => config('app.phoneNumbers.aedberg'),
            'belt' => '||'
        ],
        [
            'imageUrl' => URL::asset('images/instructors/john.jpg'),
            'name' => 'John Nilsson, Sensei',
            'phone' => '',
            'belt' => '||'
        ]
    ]])
    @endcomponent
@endsection