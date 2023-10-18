<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubjectController extends Controller
{
    public function index(): JsonResponse
    {
        $subjects = Subject::all();
        return response()->json($subjects, Response::HTTP_OK);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required',
        ]);

        $subject = Subject::create([
            'name' => $request->input('name'),
        ]);

        return response()->json($subject, Response::HTTP_CREATED);
    }

    public function show(string $id): JsonResponse
    {
        $subject = Subject::find($id);

        if (!$subject)
        {
            return response()->json(['message' => "Subject didn't find"], Response::HTTP_NOT_FOUND);
        }

        return response()->json($subject, Response::HTTP_OK);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $subject = Subject::find($id);

        if (!$subject)
        {
            return response()->json(['message' => "Subject didn't find"], Response::HTTP_NOT_FOUND);
        }

        $request->validate([
            'name' => 'required',
        ]);

        $subject->update([
            'name' => $request->input('name'),
        ]);

        return response()->json($subject, Response::HTTP_OK);
    }

    public function destroy(string $id): JsonResponse
    {
        $subject = Subject::find($id);

        if (!$subject)
        {
            return response()->json(['message' => "Subject didn't find"], Response::HTTP_NOT_FOUND);
        }

        $subject->delete();

        return response()->json(['message' => 'Subject deleted successfully'], Response::HTTP_NO_CONTENT);
    }
}
