<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Student;

class DayWeek extends Model
{
    protected $guarded = [];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
}
