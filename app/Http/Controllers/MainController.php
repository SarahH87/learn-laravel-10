<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class MainController extends Controller
{
    public function home()
    {
        return Inertia::render('Home', [
            'currentPage' => 'home',
        ]);
    }

    public function conditionals()
    {
        $assignments = [
            [
                'name' => 'Finish shopping',
                'complete' => false,
                'id' => 1,
            ],
            [
                'name' => 'Learn Vue',
                'complete' => false,
                'id' => 2,
            ]                ,
            [
                'name' => 'Laravel basics recap',
                'complete' => false,
                'id' => 3,
            ],
            [
                'name' => 'Read Laravel documentation',
                'complete' => false,
                'id' => 4,
            ],
            [
                'name' => 'Learn Docker',
                'complete' => false,
                'id' => 5,
            ],
            [
                'name' => 'Build API',
                'complete' => true,
                'id' => 6,
            ],
        ];

        $inProgressAssignments = array_filter($assignments, function ($item) {
            return $item['complete'] === false;
        });

        $completedAssignments = array_filter($assignments, function ($item) {
            return $item['complete'] != false;
        });

        return Inertia::render('Conditionals', [
            'currentPage' => 'home',
            'assignments' => $assignments,
            'inProgressAssignments' => $inProgressAssignments,
            'completedAssignments' => $completedAssignments,
        ]);
    }
}
