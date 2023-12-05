<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
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
}
