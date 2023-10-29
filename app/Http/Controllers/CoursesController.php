<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CoursesController extends Controller
{
    public function index(CourseRequest $request): JsonResponse
    {
        $query = Course::query();

        if($request->has('subject'))
        {
            $subjectName = $request->query('subject');
            $subject = Subject::where('name', 'like', '%' . $subjectName . '%')->first();

            if ($subject)
            {
                $query->where('subject_id', $subject->id);
            }
        }

        if ($request->has('name'))
        {
            $query->where('name', 'like', '%' . $request->query('name') . '%');
        }

        if ($request->has('seats'))
        {
            $query->where('seats', $request->query('seats'));
        }

        $courses = $query->get();

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

        if (!$course) {
            return response()->json(['message' => 'Course not found'], Response::HTTP_NOT_FOUND);
        }

        $validatedData = $request->validated();
        $course->update($validatedData);

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
