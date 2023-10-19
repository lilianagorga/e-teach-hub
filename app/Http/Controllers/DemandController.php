<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemandRequest;
use App\Models\Demand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\Controller;
use Symfony\Component\HttpFoundation\Response;

class DemandController extends Controller
{
    public function index(): JsonResponse
    {
        $demands = Demand::all();
        return response()->json($demands, Response::HTTP_OK);
    }

    public function store(DemandRequest $request): Response
    {
        return response(auth()->user()->demands()->create($request->validated()), Response::HTTP_CREATED);
    }

    public function show(string $id): JsonResponse
    {
        $demand = Demand::find($id);

        if (!$demand)
        {
            return response()->json(['message' => "Demand not found"], Response::HTTP_NOT_FOUND);
        }
        return response()->json($demand, Response::HTTP_OK);
    }

    public function update(DemandRequest $request, Demand $demand): Response
    {
        $demand->update($request->validated());
        return response($demand, Response::HTTP_OK);
    }

    public function destroy(Demand $demand): Response
    {
        $demand->delete();
        return response([], Response::HTTP_NO_CONTENT);
    }
}
