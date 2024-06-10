<?php

namespace App\Http\Requests\Twill;

use A17\Twill\Http\Requests\Admin\Request;
use App\Rules\SectionRule;

class StylePageRequest extends Request
{
    public function rulesForCreate()
    {
        return [
            'repeaters.sections.*.mediaType' => new SectionRule(),
        ];
    }

    public function rulesForUpdate()
    {
        return $this->rulesForCreate();
    }
}
