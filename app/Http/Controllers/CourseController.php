<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends Controller
{
    public function index(): JsonResponse
    {
        $courses = Course::all();

        return response()->json($courses, Response::HTTP_OK);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required',
            'seats' => 'required',
            'subject_id' => 'required',
        ]);

        $course = Course::create([
            'name' => $request->input('name'),
            'seats' => $request->input('seats'),
            'subject_id' => $request->input('subject_id'),
        ]);

        return response()->json($course, Response::HTTP_CREATED);
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

    public function update(Request $request, string $id): JsonResponse
    {
        $course = Course::find($id);

        if (!$course)
        {
            return response()->json(['message' => "Course didn't find"], Response::HTTP_NOT_FOUND);
        }

        $request->validate([
            'name' => 'required',
            'seats' => 'required',
            'subject_id' => 'required',
        ]);

        $course->update([
            'name' => $request->input('name'),
            'seats' => $request->input('seats'),
            'subject_id' => $request->input('subject_id'),
        ]);

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
