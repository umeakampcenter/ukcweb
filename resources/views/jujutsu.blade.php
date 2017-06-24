@extends('app')
@section('content')
    @component('contentBox')
        @slot('textBox')
        <h1>Jujutsu</h1>
        För oss på Umeå Kampcenter är Jujutsu all form av obeväpnad kamp. Vår målsättning är att du som utövare ska
        känna dig trygg oavsett vart fighten äger rum. Därför tränar vi inte bara självförsvar utan även all form av
        grappling, slag och spark samt nedtagningar. Som utövare av BJJ, Judo, Karate eller liknande kommer du
        definitivt att känna igen dig!
        @endslot
        @slot('imageBox')
        bild
        @endslot
    @endcomponent
    @component('contentBox')
        @slot('textBox')
        <h2>Absolut nybörjare</h2>
        Om du aldrig hållit på med någon kampsport tidigare eller känner dig otränad kan du vara lugn. Vi börjar från
        början med korrekt fallteknik och hjälper dig att komma i form. Vi ägnar stor uppmärksamhet åt varje enskild
        elev så att du får tydliga instruktioner där du behöver.
        @endslot
        @slot('imageBox')
        bild2
        @endslot
    @endcomponent
@endsection