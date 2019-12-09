@extends('app')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Jujutsu</h1>
        To us, Jujutsu is a combination of all unarmed martial arts styles. Our goal is that you as a student should
        feel confident wherever the fight takes place. With that goal in mind, we train not only self defence but all
        forms of grappling, striking and takedowns. If you've practiced BJJ, Judo, Karate or similar styles earlier you
        will definitively recognize yourself.<br>
        <br>
        We are a part of the <a href="http://www.stjf.net" target="_blank">Swedish Taijutsu / Jujutsu Federation</a>

        <a href="https://www.facebook.com/groups/ukcjutsu/" target="_blank" class="external-link"><div><img src="images/fb.png" /></div><span>Facebook group</span></a>
        <a href="https://www.instagram.com/jujutsu.umea" target="_blank" class="external-link"><div><img src="images/instagram.png" /></div><span>Instagram</span></a>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juj3.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Train with us</h2>
        If you never have been into any martial arts before or if you feel unfit you don't need to worry. We start from
        the ground up with breakfalls and help you get in shape. We devote a lot of attention to each student to make
        sure you get clear instructions that makes sense to you. We train in cotton kimonos, clothes that withstand
        the sudden tugs. Naturally you don't have to show up in a kimono at the first session, regular training clothes
        without zippers work fine.
        <br><br>
        <strong>Have you trained Jujutsu before?</strong><br>
        There are many different styles of Jujutsu in Sweden, both large and small ones. We have decided to develop our
        own blend of Jujutsu. This means that we are in control of the direction we take and which techniques
        that should be taught. Of course we're part of a national organization with the same open mindset as ourselves,
        which lets us go to inspiring seminars and get help with black belt examinations.
        <br><br>
        @lang('main.membershipFee')
        @endslot
        @slot('imageBox')
            <iframe
                    width="100%"
                    height="315"
                    src="https://www.youtube.com/embed/YYu3HEyhYHc?rel=0&amp;showinfo=0"
                    frameborder="0"
                    allowfullscreen
            >
            </iframe>
            <iframe
                    width="100%"
                    height="315"
                    src="https://www.youtube.com/embed/Iip1XU9mrdE?rel=0&amp;showinfo=0"
                    frameborder="0"
                    allowfullscreen
            >
            </iframe>
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Our blend of Jujutsu</h2>
            The techniques can be recognized from many other styles. Depending on what you have practiced before, you
            may get more sparring and broaden your skills from what is normally considered Jujutsu techniques. With a
            short chain of command there's even a possibility of affecting the content of our syllabus.
            <br><br>
            <strong>Sparring</strong><br>
            We want our students to gain a deeper understanding of how the techniques work with resistance. To achieve
            this we include live sparring early in our training programme. We make sure you have the tools needed so
            injuries are rare.
            <br><br>
            Some of our sparring forms:
            <ul>
                <li>Self defence against common attacks which usually ends with the opponent being pinned on the ground.</li>
                <li>Throws with varying degrees of resistance (Judo/wrestling)</li>
                <li>Standup fighting (Karate/kickboxing)</li>
                <li>Ground fighting (Judo/BJJ)</li>
            </ul>
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juj6.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Examinations and the belt system</h2>
            By wearing a belt around your waist its colour will tell your training partners what to expect from you.
            When you go to a seminar this belt signals to the other participants how advanced techniques you can deal
            with. At our academy everyone trains with everybody else, prestigelessly.
            <br><br>
            We have clear expectations of our students. You will gain access to a syllabus with all the requirements
            for your next grade. We also put a lot of effort into filming these techniques so you can brush up on them
            before the examination. The examination is a special session where you show all that you have learned during
            a couple of intense hours to hopefully earn a new belt.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juj5.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
            <h2>Try for yourself!</h2>
            @lang('sub.tryOutText')
            Our Jujutsu gives you a solid foundation and is very compatible with our other styles - BJJ and kickboxing.
        @endslot
        @slot('imageBox')
            <img src="{{ URL::asset('images/juj4.jpg') }}" alt="Umeå Kampcenter">
        @endslot
    @endcomponent
    @component('instructors', ['persons' => [
        [
            'imageUrl' =>  URL::asset('images/instructors/peter.jpg'),
            'name' => 'Peter Spegel, Renshi',
            'phone' => config('app.phoneNumbers.pspegel'),
            'belt' => '||||'
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