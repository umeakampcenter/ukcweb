@component('contentBox')
    @slot('textBox')
        <h1>{{ $translatedInput('title') }}</h1>
        {!! $block->translatedWysiwyg('text') !!}
    @endslot
    @slot('imageBox')
        @php
            $image = $block->imageObject('sectionImage');
        @endphp
        @if ($image)
            @php
                $imageUrl = ImageService::getUrl($image->uuid, ['fm' => 'png']);
            @endphp
            <img src="{{ $imageUrl }}">
        @endif
    @endslot
@endcomponent
