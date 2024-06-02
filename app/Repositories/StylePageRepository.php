<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\StylePage;

class StylePageRepository extends ModuleRepository
{
    use HandleTranslations;

    public function __construct(StylePage $model)
    {
        $this->model = $model;
    }

    public function afterSave($model, $fields): void
    {
        $this->updateRepeater($model, $fields, 'sections');
        parent::afterSave($model, $fields);
    }

    public function getFormFields($object): array
    {
        $fields = parent::getFormFields($object);

        return $this->getFormFieldsForRepeater(
            $object,
            $fields,
            'sections',
            'Section',
            'sections'
        );
    }
}
