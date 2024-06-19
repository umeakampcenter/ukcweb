@component('contentBox')
    @slot('textBox')
        <h1>{{ $translatedInput('title') }}</h1>
        {!! $block->translatedWysiwyg('text') !!}
    @endslot
    @slot('imageBox')
        <iframe width="100%" height="315" src="{{ $block->input('sectionVideo') }}" frameborder="0" allowfullscreen></iframe>
    @endslot
@endcomponent
