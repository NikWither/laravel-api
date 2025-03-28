<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\LessonController;
use App\Http\Controllers\API\V1\SubjectsController;
use App\Http\Controllers\API\V1\StudentsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {

    Route::apiResource('lessons', LessonController::class);

    Route::apiResource('subjects', SubjectsController::class);

    Route::apiResource('students', StudentsController::class);

    Route::apiResource('day_weeks', StudentsController::class);

});