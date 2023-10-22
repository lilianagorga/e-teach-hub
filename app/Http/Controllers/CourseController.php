<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
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
            return response()->json(['message' => 'Course not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($course, Response::HTTP_OK);
    }

    public function update(CourseRequest $request, string $id): JsonResponse
    {
        $course = Course::find($id);

        if (!$course)
        {
            return response()->json(['message' => 'Course not found'], Response::HTTP_NOT_FOUND);
        }

//        if ($request->isMethod('put')) {
//            $validatedData = $request->validated();
//            $course->update($validatedData);
//        } else
//        {
//            $course->update($request->all());
//        }

        $course->update($request->validated());


        return response()->json($course, Response::HTTP_OK);
    }


    public function destroy(string $id): JsonResponse
    {
        $course = Course::find($id);

        if (!$course)
        {
            return response()->json(['message' => 'Course not found'], Response::HTTP_NOT_FOUND);
        }

        $course->delete();

        return response()->json(['message' => "Course deleted successfully"], Response::HTTP_NO_CONTENT);
    }
}
