<div class="instructors">
    <div class="inner clearfix">
        <h2>{{ $translatedInput('title') }}</h2>
        @foreach ($repeater('instructors') as $instructor)
            <div class="person">
                <div class="person-img">
                    @php
                        $image = $instructor->renderData->block->imageObject('instructorImage');
                        $imageUrl = $image === null ? '/assets/person.png' : ImageService::getUrl($image->uuid);
                    @endphp
                    <img src="{{ $imageUrl }}">
                </div>
                <div class="person-name">
                    {{ $instructor->renderData->block->input('name') }}
                </div>
                <div class="person-phone">
                    {{ $instructor->renderData->block->input('phone') }}
                </div>
                @if ($instructor->renderData->block->input('belt') !== null)
                    @php
                        $belt = $instructor->renderData->block->input('belt');
                        switch ($belt) {
                            case '5 kyu':
                                $beltColor = 'yellow';
                                break;
                            case '4 kyu':
                                $beltColor = 'orange';
                                break;
                            case '3 kyu':
                                $beltColor = 'green';
                                break;
                            case '2 kyu':
                            case 'blue':
                                $beltColor = 'blue';
                                break;
                            case '1 kyu':
                            case 'brown':
                                $beltColor = 'brown';
                                break;
                            case 'purple':
                                $beltColor = 'purple';
                                break;
                            default:
                                $beltColor = 'black';
                                break;
                        }

                        $numStripes = substr($belt, -4) === ' dan' ? intval(substr($belt, 0, -4)) : 0;
                        $stripes = str_repeat('|', $numStripes);
                    @endphp
                    <div class="person-belt" style="background-color: {!! $beltColor !!}">
                        &nbsp;{!! $stripes !!}
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
