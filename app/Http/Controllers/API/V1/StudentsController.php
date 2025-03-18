<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Http\Requests\Student\StoreStudentRequest;
use App\Http\Requests\Student\UpdateStudentRequest;
use App\Http\Requests\Student\FilterStudentRequest;
use App\Http\Resources\V1\StudentsResource;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FilterStudentRequest $request)
    {
        // $query = Student::query();

        return StudentsResource::collection(Student::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        new StudentsResource(Student::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return new StudentsResource($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->all());
        return new StudentsResource($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json([
            'message' => 'Ученик удален'
        ]);
    }
}
