<?php

namespace App\Http\Filters;

use App\Http\Filters\BaseFilter;

class StudentsFilter extends BaseFilter
{
    protected function filterByClasses($value)
    {
        $this->query->where('classes', $value);
    }
}