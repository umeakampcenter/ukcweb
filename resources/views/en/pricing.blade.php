@extends('app')
@section('title', 'Pricing')
@section('content')
@component('contentBox')
@slot('textBox')
<h1>Pricing</h1>
<ul>
    <li>If you are 14 years or older you can train all our styles for 1100 SEK per semester.</li>
    <li>Children classes cost 700 SEK per semester.</li>
    <li>You can also become a support member for 500 SEK per semester if you're not training actively.</li>
</ul>
<br>
<br>
The membership fee can be payed via Swish 123 646 85 81. Please include name, style and personal identity number in the message.
@endslot
@slot('imageBox')
<img class="board-image" src="{{ Vite::asset('resources/images/umeakampcenterlogo.png') }}" alt="Umeå Kampcenter">
@endslot
@endcomponent
@endsection