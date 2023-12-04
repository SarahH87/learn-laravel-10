<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class MainController extends Controller
{
    public function home()
    {
        $users = User::all();

        return Inertia::render('Home', [
            'currentPage' => 'home',
            'users' => $users
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
                'name' => 'Advanced Laravel recap',
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
            [
                'name' => 'Inertia Js course',
                'complete' => false,
                'id' => 7,
                'tag' => 'laravel'
            ],            [
                'name' => 'Learn PEST',
                'complete' => false,
                'id' => 7,
                'tag' => 'laravel'
            ],
            [
                'name' => 'Read into AWS',
                'complete' => false,
                'id' => 8,
                'tag' => 'laravel'
            ],
        ];

        return Inertia::render('Conditionals', [
            'currentPage' => 'home',
            'assignments' => $assignments,
        ]);
    }
}
