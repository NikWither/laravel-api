<?php

namespace App\Http\Filters;

use App\Http\Filters\BaseFilter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsFilter extends BaseFilter
{
    protected function filterByClasses($value)
    {
        $classes = is_array($value) ? $value : explode('|', $value);

        $this->query->whereIn('classes', $classes);
    }

    public function filterBySubjects($value)
    {
        $subjects = is_array($value) ? $value : explode('|', $value);

        /*
        TO DO пофиксить баг с регистром
        // перевод всех элементов в нижний регистр, а затем первую букву делаем заглавной
         // $subjects = array_map(fn($item) => ucfirst($item), $subjects);
        */

        $this->query->whereHas('subjects', function ($q) use ($subjects) {
            $q->whereIn('name', $subjects);
        });
    }

    public function filterByDayWeek($value)
    {
        $days = is_array($value) ? $value : explode('|', $value);

        $this->query->whereHas('dayWeeks', function ($q) use ($days) {
            $q->whereIn('name', $days);
        });
    }
}