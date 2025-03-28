<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Subject;
use App\Models\Lesson;
use App\Models\DayWeek;


class Student extends Model
{
    protected $guarded = [];

    public function subjects() : BelongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }

    public function lessons() : HasMany
    {
        return $this->HasMany(Lesson::class);
    }

    public function dayWeeks() : BelongsToMany
    {
        return $this->belongsToMany(DayWeek::class, 'student_day_week');
    }
}
