@extends('app')
@section('content')
<div class="cd-schedule loading">
    <div class="timeline">
        <ul>
            <li><span>11:00</span></li>
            <li><span>11:30</span></li>
            <li><span>12:00</span></li>
            <li><span>12:30</span></li>
            <li><span>13:00</span></li>
            <li><span>13:30</span></li>
            <li><span>14:00</span></li>
            <li><span>14:30</span></li>
            <li><span>15:00</span></li>
            <li><span>15:30</span></li>
            <li><span>16:00</span></li>
            <li><span>16:30</span></li>
            <li><span>17:00</span></li>
            <li><span>17:30</span></li>
            <li><span>18:00</span></li>
            <li><span>18:30</span></li>
            <li><span>19:00</span></li>
            <li><span>19:30</span></li>
            <li><span>20:00</span></li>
            <li><span>20:30</span></li>
            <li><span>21:00</span></li>
            <li><span>21:30</span></li>
            <li><span>22:00</span></li>
            <li><span>22:30</span></li>
        </ul>
    </div>

    <div class="events">
        <ul>
            @foreach (array_keys($events) as $day)
            <li class="events-group">
                <div class="top-info"><span>{{ $day }}</span></div>
                <ul>
                    @foreach ($events[$day] as $event)
                    <li class="single-event {{ $event['class'] }}" data-start="{{ $event['start'] }}" data-end="{{ $event['end'] }}" data-content="event-abs-circuit">
                        <em class="event-name">{!! $event['title'] !!}</em>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection