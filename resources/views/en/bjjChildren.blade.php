@extends('app')
@section('title', 'BJJ')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>BJJ children classes</h1>
        We offer children classes in Brazilian Jiu-Jitsu for ages 6-13. The kids class combines the fundamentals of BJJ with play and fun. The youth class is more focused on technique and sparring. The age limitations are approximations (maturity, ambitions and size are the deciding factors).<br>
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
            'imageUrl' => URL::asset('images/instructors/mimmi.jpg'),
            'name' => 'Mimmi Larsson',
            'phone' => '',
            'belt' => '',
            'beltColor' => config('app.beltColors.blue'),
        ],
        [
            'imageUrl' => URL::asset('images/instructors/hanna.jpg'),
            'name' => 'Hanna Johansson',
            'phone' => '',
            'belt' => '',
            'beltColor' => config('app.beltColors.blue'),
        ],
    ]])
    @endcomponent
@endsection