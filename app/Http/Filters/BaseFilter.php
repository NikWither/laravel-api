<?php

namespace App\Http\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class BaseFilter 
{
    protected Builder $query;

    public function __construct(Builder $query)
    {
        $this->query = $query;
    }

    public function apply(Request $request)
    {
        foreach($request->all() as $key => $value)
        {
            $method = 'filterBy' . ucfirst($key);

            if (method_exists($this,$method)) {
                $this->$method($value);
            }
        }

        return $this->query;
    }
}