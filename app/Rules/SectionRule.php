<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\ValidationRule;

class SectionRule implements DataAwareRule, ValidationRule
{
    protected $data = [];
 
    public function setData(array $data): static
    {
        $this->data = $data;
 
        return $this;
    }

    /**
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $parts = explode(".", $attribute);
        if (count($parts) < 3) {
            $fail('Kunde inte validera media');
            return;
        }

        [$repeaters, $sections, $sectionIndex] = $parts;

        if (!isset($this->data[$repeaters][$sections][$sectionIndex])) {
            $fail('Kunde inte validera media');
            return;
        }

        if ($value === 'image' && empty($this->data[$repeaters][$sections][$sectionIndex]['medias'])) {
            $fail('Ingen bild angiven');
            return;
        }

        if ($value === 'video' && empty($this->data[$repeaters][$sections][$sectionIndex]['sectionVideo'])) {
            $fail('Ingen video angiven');
            return;
        }
    }
}
