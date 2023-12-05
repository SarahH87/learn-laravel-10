<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAssignmentRequest;
use App\Http\Requests\UpdateAssignmentRequest;
use App\Http\Resources\AssignmentResource;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    /**
     * Get all assignments
     */
    public function index()
    {
        return AssignmentResource::collection(Assignment::all());
    }

    /**
     * Show a single assignment
     */
    public function show(Assignment $assignment)
    {
        return AssignmentResource::make($assignment);
    }

    /**
     * Store a single assignment
     */
    public function store(StoreAssignmentRequest $request)
    {
        $assignment = Assignment::create($request->validated());

        return AssignmentResource::make($assignment);
    }

    /**
     * Update a specific assignment
     */
    public function update(UpdateAssignmentRequest $request, Assignment $assignment)
    {
        $assignment->update($request->validated());

        return AssignmentResource::make($assignment);
    }


}
