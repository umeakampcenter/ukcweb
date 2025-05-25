<?php

namespace App\Http\Requests\Twill;

use Illuminate\Validation\Validator;
use A17\Twill\Http\Requests\Admin\Request;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Rules\Enum;

enum Day: string
{
    case MONDAY = 'monday';
    case TUESDAY = 'tuesday';
    case WEDNESDAY = 'wednesday';
    case THURSDAY = 'thursday';
    case FRIDAY = 'friday';
    case SATURDAY = 'saturday';
    case SUNDAY = 'sunday';
}

enum TypeOfClass: string
{
    case JUJUTSU = 'jujutsu';
    case BJJ = 'bjj';
    case MISC = 'misc';
}

class ScheduleRequest extends Request
{
    public function rulesForCreate()
    {
        return $this->rulesForTranslatedFields([
            // regular rules
            'day' => ['required', new Enum(Day::class)],
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

                if ($this->request->get('end') <= $this->request->get('start')) {
                    $validator->errors()->add(
                        "end",
                        "The class must end after its start"
                    );
                }

                // php artisan route:list
                $scheduleId = $this->route('schedule');

                $conflict = Schedule::query()
                    ->where('day', $this->request->get('day'))
                    ->where(function (Builder $q1) {
                        $q1->where(function (Builder $q2) {
                            // Overlaps the end of an existing class.
                            $q2->where('start', '>=', $this->request->get('start'))
                                ->where('start', '<=', $this->request->get('end'));
                        })
                        ->orWhere(function (Builder $q2) {
                            // Overlaps the start of an existing class.
                            $q2->where('end', '>=', $this->request->get('start'))
                                ->where('end', '<=', $this->request->get('end'));
                        });
                    })
                    ->when($scheduleId, function (Builder $query, string $id) {
                        $query->where('id', '<>', $id); // Don't compare with self on update.
                    })
                    ->first();

                if ($conflict !== null) {
                    $validator->errors()->add(
                        "start",
                        "Overlaps with an existing class ({$conflict->title}, {$conflict->start}-{$conflict->end})"
                    );
                }

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
