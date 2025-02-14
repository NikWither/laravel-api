<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Http\Models\Subject;

class Student extends Model
{
    protected $guarded = [];

    public function subjects() : BelongsToMany
    {
        return $this->BelongsToMany(Subject::class);
    }
}
