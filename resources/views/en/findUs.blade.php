@extends('app')
@section('title', 'Find us')
@section('content')
    @component('contentBox')
        @slot('textBox')
            <h1>Find us</h1>

            You can find us in the <strong>inner courtyard</strong> behind ICA Bågen (grocery store). The quickest way to
            gain entrance to the inner courtyard is through the steel gate next to ICA. In the evening it might be
            locked, in which case you must enter from the south side next to the Opera instead.
            <br><br>
            <h2>Address</h2>
            Rådhusesplanaden 16 B<br>
            903 28 UMEÅ
        @endslot
        @slot('imageBox')
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d369.93820339803653!2d20.266372807343544!3d63.82873424003701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x467c5b0df46b4743%3A0xe5e215d1933a5ca!2sUme%C3%A5+Kampcenter!5e0!3m2!1ssv!2sse!4v1559336624898!5m2!1ssv!2sse" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1559337356728!6m8!1m7!1s3iBAF92NOrgLEILjWvIQcw!2m2!1d63.82882591825577!2d20.26608340877307!3f61.68059078022701!4f-2.663592092291168!5f1.9587109090973311" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        @endslot
    @endcomponent
@endsection