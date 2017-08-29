@extends('app')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Kickboxing</h1>
        Originally kickboxing was a way for different striking arts to compete against each other under common rules.
        Today it's a training form on its own that borrows techniques from boxing, karate and other contact sports.
        Regardless if you're just looking for physical exercise or if you want to compete you can train with us.
        As members of the national kickboxing association you can compete with other kickboxers throughout the country.
        <ul>
            <li>
                We are a part of
                <a href="http://www.swedenkickboxing.se" target="_blank">Sweden kickboxing</a>
            </li>
            <li>
                Our kickboxing
                <a href="https://www.facebook.com/groups/383422005110541" target="_blank">Facebook group</a>
            </li>
        </ul>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/kick3.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Train with us</h2>
        We start off with basic techniques such as stances and movement. We build upon this with punches and kicks to
        put them in sparring context later. Even if you've never worn a pair of boxing gloves you'll quickly learn
        to protect yourself while still having a strong offense. On top of that you will get in shape at the same time!
        <br><br>
        <strong>Have you trained martial arts before?</strong><br>
        Since kickboxing was created to let different styles compete against each other, it has a lot in common with
        many other striking arts. If you've trained a style where head punches are not allowed you will learn to adjust
        your guard to protect yourself in a good way. Alternatively, if you've trained boxing before you will soon learn
        to incorporate kicks into your arsenal to become a complete kickboxer!
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/kick2.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>What's the training like?</h2>
        During a large portion of the semester beginners and advanced students trains in separate groups. During the
        warm up we soften up the muscles used most frequently such as calves, thighs, abs, shoulder and so on. The
        training consists in large parts of pair drills where we combine offensive and defensive techniques. We also use
        diffent kinds of striking pads to increase the intensitiy in the punches and kicks. Advanced students that have
        obtained protection gear also do live sparring to learn to use the techniques in a more competition like
        setting.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/kick1.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Try for yourself!</h2>
            @lang('sub.tryOutText')
            Kickboxing is a great foundation for your standup game and can be complemented with our other styles if
            you'd like to learn self defence or ground fighting.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/kick4.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('instructors', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/instructors/stefan.jpg'),
            'name' => 'Stefan Eriksson',
            'phone' => config('app.phoneNumbers.seriksson'),
            'belt' => null
        ]
    ]])
    @endcomponent
@endsection