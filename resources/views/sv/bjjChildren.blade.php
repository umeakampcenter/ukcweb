@extends('app')
@section('title', 'BJJ')
@section('content')
@component('contentBox')
@slot('textBox')
<h1>BJJ barnträning</h1>
Vi erbjuder barnträning inom Brasiliansk Jiu-Jitsu för åldrarna 6-13 år. Barnpasset kombinerar grunderna i BJJ med lek och skoj. Ungdomspasset är för de äldre barnen som vill träna mer teknik och sparras. Åldersgränserna är ungefärliga då vi i första hand tar hänsyn till mognad, ambition och storlek.<br>
<br>
Målet är att hitta glädje i träningen! Anmälan sker via vår Facebook eller vår <a href="mailto:umeakampcenterif@gmail.com">mejl</a> och kostar 700 kr/termin.
@endslot
@slot('imageBox')
<img src="{{ Vite::asset('resources/images/bjj_children.jpg') }}" alt="BJJ barn">
@endslot
@endcomponent
@component('instructors', ['persons' => [
[
'imageUrl' => Vite::asset('resources/images/instructors/mattias.jpg'),
'name' => 'Mattias Sandström',
'phone' => config('app.phoneNumbers.msandstrom'),
'belt' => '',
'beltColor' => config('app.beltColors.black')
],
[
'imageUrl' => Vite::asset('resources/images/instructors/mimmi.jpg'),
'name' => 'Mimmi Larsson',
'phone' => '',
'belt' => '',
'beltColor' => config('app.beltColors.blue'),
],
[
'imageUrl' => Vite::asset('resources/images/instructors/hanna.jpg'),
'name' => 'Hanna Johansson',
'phone' => '',
'belt' => '',
'beltColor' => config('app.beltColors.blue'),
],
]])
@endcomponent
@endsection