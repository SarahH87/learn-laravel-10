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
                'tag' => 'home',
            ],
            [
                'name' => 'Learn Vue',
                'complete' => false,
                'id' => 2,
                'tag' => 'vue',
            ]                ,
            [
                'name' => 'Laravel basics recap',
                'complete' => false,
                'id' => 3,
                'tag' => 'laravel'
            ],
            [
                'name' => 'Read Laravel documentation',
                'complete' => false,
                'id' => 4,
                'tag' => 'laravel'
            ],
            [
                'name' => 'Learn Docker',
                'complete' => false,
                'id' => 5,
                'tag' => 'docker',
            ],
            [
                'name' => 'Build API',
                'complete' => true,
                'id' => 6,
                'tag' => 'laravel'
            ],
        ];

        return Inertia::render('Conditionals', [
            'currentPage' => 'home',
            'assignments' => $assignments,
        ]);
    }

    public function addItem()
    {
        dd('calling add item');
    }
}
