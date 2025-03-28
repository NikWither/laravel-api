<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\V1\SubjectsResource;
use App\Http\Resources\V1\DayWeekResource;
use App\Http\Resources\V1\LessonsForStudentPageResource;

class StudentsResource extends JsonResource
{
    public static $wrap = 'studentDetailInfo';

    public function toArray(Request $request): array
    {
        $isRouteShow = str_contains(Route::currentRouteName(), 'students.show'); // Boolean

        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'notes' => $this->when($isRouteShow, $this->notes),
            'day_weeks' => DayWeekResource::collection($this->dayWeeks),
            'subjects' => SubjectsResource::collection($this->subjects),
            'lessons' => $this->when($isRouteShow, LessonsForStudentPageResource::collection($this->lessons)),
            'classes' => $this->classes,
            'created' => $this->created_at->format('d.m.Y'),
            'updated' => $this->updated_at->format('d.m.Y'),
        ];
    }
}
