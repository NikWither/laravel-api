<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\LessonController;
use App\Http\Controllers\API\V1\SubjectsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/getSDF', function() {
    dd('awedasd');
});

Route::prefix('v1')->group(function () {
    Route::apiResource('lessons', LessonController::class);

    Route::apiResource('subjects', SubjectsController::class);
});