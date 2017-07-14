<div class="instructors">
    <div class="inner clearfix">
        <h2>@lang('sub.instructors')</h2>
        @foreach ($persons as $person)
        <div class="person">
            <div class="person-img">
                <img src="{{ $person['imageUrl'] }}">
            </div>
            <div class="person-name">
                {{ $person['name'] }}
            </div>
            <div class="person-phone">
                {{ $person['phone'] }}
            </div>
            @if ($person['belt'] !== null)
            <div
                    class="person-belt"
                    {!! isset($person['beltColor']) ? 'style="background-color: ' . $person['beltColor'] . '"': '' !!}
            >
                &nbsp;{{ $person['belt'] }}
            </div>
            @endif
        </div>
        @endforeach
    </div>
</div>
