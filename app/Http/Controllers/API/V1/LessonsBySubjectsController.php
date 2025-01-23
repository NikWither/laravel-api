<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Subject;
use App\Http\Requests\StoreLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Http\Requests\GetLessonsBySubjectsRequest;

class LessonsBySubjectsController extends Controller
{
    public function __invoke(GetLessonsBySubjectsRequest $request)
    {
        $subjectId = $request->input('subject_id');

        $lessonsWithCurrentSubject = Lesson::where('subject_id', $subjectId)->with('subject')->get();

        return response()->json($lessonsWithCurrentSubject);
    }
}
