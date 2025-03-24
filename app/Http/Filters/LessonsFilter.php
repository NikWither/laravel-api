<?php

namespace App\Http\Filters;

use App\Http\Filters\BaseFilter;

class LessonsFilter extends BaseFilter
{
    protected function filterBySubject($value)
    {
        $this->query->where('subject', $value);
    }

    // protected function filterByPrice($value) 
    // {
    //     $this->query->where('price', )
    // }

    protected function filterByIsPassed($value)
    {
        $this->query->where('isPassed', $value);
    }
}