<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\Controller;
use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SubjectController extends Controller
{
    public function index(): JsonResponse
    {
        $subjects = Subject::all();
        return response()->json($subjects, Response::HTTP_OK);
    }

    public function store(SubjectRequest $request): Response
    {
        return response(auth()->user()->subjects()->create($request->validated()), Response::HTTP_CREATED);

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

    public function update(SubjectRequest $request, string $id): JsonResponse
    {
        $subject = Subject::find($id);

        if (!$subject)
        {
            return response()->json(['message' => "Subject didn't find"], Response::HTTP_NOT_FOUND);
        }

        $subject->update($request->validated());

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
