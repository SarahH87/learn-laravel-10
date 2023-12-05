<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssignmentResource;
use App\Models\Assignment;
use Illuminate\Http\Request;

class CompleteAssignmentController extends Controller
{
    public function __invoke(Request $request, Assignment $assignment) : AssignmentResource
    {
        $assignment->complete = $request->complete;
        $assignment->save();

        return AssignmentResource::make($assignment);
    }
}
