<?php

namespace App\Http\Requests\Twill;

use Illuminate\Validation\Validator;
use A17\Twill\Http\Requests\Admin\Request;
use Illuminate\Validation\Rules\Enum;

enum TypeOfClass: string
{
    case JUJUTSU = 'jujutsu';
    case BJJ = 'bjj';
    case MISC = 'misc';
}

class SchemaRequest extends Request
{
    public function rulesForCreate()
    {
        return $this->rulesForTranslatedFields([
            // regular rules
            'start' => ['required', 'regex:/^\d{2}:\d{2}$/'],
            'end' => ['required', 'regex:/^\d{2}:\d{2}$/'],
            'typeOfClass' => ['required', new Enum(TypeOfClass::class)]
        ], [
            // translated fields rules with just the field name like regular rules
            'title' => ['required', 'between:3,200'],
        ]);
    }

    public function rulesForUpdate()
    {
        return [];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                // Require that a title has been set for all languages
                $languages = $this->request->all('languages');
                $titles = $this->request->all('title');

                foreach ($languages as $key => $language) {
                    $languageCode = $language['value'];

                    if (!isset($titles[$languageCode])) {
                        $validator->errors()->add(
                            "title.{$languageCode}",
                            'Required'
                        );
                    }
                }
            }
        ];
    }
}
