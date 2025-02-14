<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Http\Requests\Lesson\FilterLessonRequest;
use App\Http\Requests\Lesson\StoreLessonRequest;
use App\Http\Requests\Lesson\UpdateLessonRequest;


class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FilterLessonRequest $request)
    {

        $query = Lesson::query();

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
    
        return $query->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLessonRequest $request)
    {
        return Lesson::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        return $lesson;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLessonRequest $request, Lesson $lesson)
    {
        $lesson->update($request->all());
        return $lesson;
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
