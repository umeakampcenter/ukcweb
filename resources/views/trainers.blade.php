<div class="trainers">
    <div class="inner clearfix">
        <h2>Tränare</h2>
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
            <div class="person-belt">
                {{ $person['belt'] }}
            </div>
        </div>
        @endforeach
    </div>
</div>
