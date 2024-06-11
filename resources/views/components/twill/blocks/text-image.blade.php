@component('contentBox')
    @slot('textBox')
        <h1>{{ $translatedInput('title') }}</h1>
        {!! $block->translatedWysiwyg('text') !!}
    @endslot
    @slot('imageBox')
        @php
            $image = $block->imageObject('sectionImage');
            $imageUrl = ImageService::getUrl($image->uuid);
        @endphp
        @if ($image)
            <img src="{{ $imageUrl }}">
        @endif
    @endslot
@endcomponent
