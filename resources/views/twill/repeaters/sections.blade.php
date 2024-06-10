@twillRepeaterTitle('Section')
@twillRepeaterTrigger('Add section')
@twillRepeaterGroup('app')

<x-twill::radios name="mediaType" label="Media type" :inline="true" :options="[
    [
        'value' => 'image',
        'label' => 'Image',
    ],
    [
        'value' => 'video',
        'label' => 'Video',
    ],
]" default="image"
    :required="true" />

<x-twill::formConnectedFields field-name="mediaType" field-values="image" :render-for-blocks="true">
    <x-twill::medias name="sectionImage" label="Image" />
</x-twill::formConnectedFields>

<x-twill::formConnectedFields field-name="mediaType" field-values="video" :render-for-blocks="true">
    <x-twill::input name="sectionVideo" label="YouTube video" type="url" placeholder="https://www.youtube.com/" />
</x-twill::formConnectedFields>
