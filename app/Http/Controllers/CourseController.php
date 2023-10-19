<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends Controller
{
    public function index(): JsonResponse
    {
        $courses = Course::all();
        return response()->json($courses, Response::HTTP_OK);
    }

    public function store(CourseRequest $request): Response
    {
        return response(auth()->user()->courses()->create($request->validated()), Response::HTTP_CREATED);
    }

    public function show(string $id): JsonResponse
    {
        $course = Course::find($id);

        if (!$course)
        {
            return response()->json(['message' => "Course didn't find"], Response::HTTP_NOT_FOUND);
        }

        return response()->json($course, Response::HTTP_OK);
    }

    public function update(CourseRequest $request, string $id): JsonResponse
    {
        $course = Course::find($id);

        if (!$course)
        {
            return response()->json(['message' => "Course didn't find"], Response::HTTP_NOT_FOUND);
        }

        $course->update($request->validated());

        return response()->json($course, Response::HTTP_OK);
    }

    public function updateSeats(CourseRequest $request, string $id): JsonResponse
    {
        $course = Course::find($id);

        if (!$course) {
            return response()->json(['message' => "Course didn't find"], Response::HTTP_NOT_FOUND);
        }

        $course->update($request->validated());

        return response()->json($course, Response::HTTP_OK);
    }


    public function destroy(string $id): JsonResponse
    {
        $course = Course::find($id);

        if (!$course)
        {
            return response()->json(['message' => "Course didn't find"], Response::HTTP_NOT_FOUND);
        }

        $course->delete();

        return response()->json(['message' => "Course deleted successfully"], Response::HTTP_NO_CONTENT);
    }
}
