<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Lesson;
use App\Models\Student;

class Subject extends Model
{
    protected $guarded = [];

    public function lessons() : HasMany
    {
        return $this->hasMany(Lesson::class);
    }

    public function students() : BelongsToMany
    {
        return $this->BelongsToMany(Student::class);
    }
}
