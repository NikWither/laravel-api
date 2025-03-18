<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Subject;
use App\Http\Requests\Lesson\FilterLessonRequest;
use App\Http\Requests\Lesson\StoreLessonRequest;
use App\Http\Requests\Lesson\UpdateLessonRequest;
use App\Http\Resources\V1\LessonsResource;


class LessonController extends Controller
{
    public function index(FilterLessonRequest $request)
    {
        $query = Lesson::with('subject');

        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }
    
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }
    
        if ($request->filled('isPaid')) {
            $query->where('isPaid', $request->isPaid);
        }

        if ($request->filled('isPassed')) {
            $query->where('isPassed', $request->isPassed);
        }
    
        if ($request->filled('subject_id')) {
            $query->where('subject_id', $request->subject_id);
        }
    
        return LessonsResource::collection($query->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLessonRequest $request)
    {
        $subject_price = $request->input('price');

        $subject_name = $request->input('subject_name');

        $subject_id = Subject::where('name', $subject_name)->first()->id;

        return new LessonsResource(Lesson::create(
            [
                'subject_id' => $subject_id,
                'price' => $subject_price
            ]
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        return new LessonsResource($lesson);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLessonRequest $request, Lesson $lesson)
    {
        $lesson->update($request->all());
        return new LessonsResource($lesson);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return response()->json([
            'message' => 'Урок удален'
        ]);
    }
}
